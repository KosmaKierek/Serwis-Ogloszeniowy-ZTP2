<?php
/**
 * Advert controller tests.
 */

namespace App\Tests\Controller;

use _PHPStan_fc01280b8\Psr\Container\ContainerExceptionInterface;
use _PHPStan_fc01280b8\Psr\Container\NotFoundExceptionInterface;
use App\Entity\Category;
use App\Entity\Enum\UserRole;
use App\Entity\Tag;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use App\Entity\Advert;
use App\Entity\User;
use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\OptimisticLockException;

/**
 * Class AdvertControllerTest.
 */
class AdvertControllerTest extends WebTestCase
{
    /**
     * Test route.
     */
    public const TEST_ROUTE = '/advert';

    /**
     * Test client.
     */
    private KernelBrowser $httpClient;

    /**
     * Set up tests.
     */
    public function setUp(): void
    {
        $this->httpClient = static::createClient();
    }

    /**
     * Test '/advert' index.
     */
    public function testIndexRoute(): void
    {
        // given
        $expectedStatusCode = 200;

        // when
        $this->httpClient->request('GET', self::TEST_ROUTE);
        $givenStatusCode=$this->httpClient->getResponse()->getStatusCode();

        // then
        $this->assertEquals($givenStatusCode, $expectedStatusCode);
    }

    /**
     * Test index route for a user.
     *
     * @throws ContainerExceptionInterface|NotFoundExceptionInterface|ORMException|OptimisticLockException
     */
    public function testIndexRouteUser(): void
    {
        // given
        $expectedStatusCode = 200;
        $user = $this->createUser([UserRole::ROLE_USER->value]);
        $this->httpClient->loginUser($user);

        // when
        $this->httpClient->request('GET', self::TEST_ROUTE);
        $resultStatusCode = $this->httpClient->getResponse()->getStatusCode();

        // then
        $this->assertEquals($expectedStatusCode, $resultStatusCode);
    }

    /**
     * Test index route for admin user.
     *
     * @throws ContainerExceptionInterface|NotFoundExceptionInterface|ORMException|OptimisticLockException
     */
    public function testIndexRouteAdminUser(): void
    {
        // given
        $expectedStatusCode = 200;
        $adminUser = $this->createUser([UserRole::ROLE_USER->value, UserRole::ROLE_ADMIN->value]);
        $this->httpClient->loginUser($adminUser);

        // when
        $this->httpClient->request('GET', self::TEST_ROUTE);
        $resultStatusCode = $this->httpClient->getResponse()->getStatusCode();

        // then
        $this->assertEquals($expectedStatusCode, $resultStatusCode);
    }

    /**
     * Test create advert.
     */
    public function testCreateAdvert(): void
    {
        // given
        $user = $this->createUser([UserRole::ROLE_USER->value]);
        $this->httpClient->loginUser($user);

        $entityManager = static::getContainer()->get('doctrine.orm.entity_manager');

        $category = new Category();
        $category->setTitle('category');
        $entityManager->persist($category);
        $entityManager->flush();

        // when
        $crawler = $this->httpClient->request('GET', self::TEST_ROUTE.'/create');

        $form = $crawler->filter('form')->form([
            'advert[title]' => 'Test advert',
            'advert[category]' => $category->getId(),
            'advert[tags]' => 'tag1, tag2',
            'advert[content]' => 'Test advert content',
        ]);

        $this->httpClient->submit($form);

        // then
        $this->assertResponseRedirects();

        $this->httpClient->followRedirect();

        $this->assertSelectorExists('.alert-success');

        $entityManager->clear();

        $advert = $entityManager
            ->getRepository(Advert::class)
            ->findOneBy(['title' => 'Test advert']);

        $advertId = $advert->getId();
        $this->assertNotNull($advertId);

        $this->assertNotNull($advert);
        $this->assertSame('Test advert', $advert->getTitle());
        $this->assertSame('Test advert content', $advert->getContent());
        $this->assertSame($user->getId(), $advert->getAuthor()->getId());
        $this->assertSame($category->getId(), $advert->getCategory()->getId());

        $this->assertCount(2, $advert->getTags());

        $tagTitles = $advert->getTags()
            ->map(fn (Tag $tag) => $tag->getTitle())
            ->toArray();

        sort($tagTitles);

        $this->assertSame(
            ['tag1', 'tag2'],
            $tagTitles
        );
    }

    /**
     * Test edit advert.
     */
    public function testEditAdvert(): void
    {
        // given
        $user = $this->createUser([UserRole::ROLE_USER->value]);
        $this->httpClient->loginUser($user);

        $entityManager = static::getContainer()->get('doctrine.orm.entity_manager');

        $category = new Category();
        $category->setTitle('category');
        $entityManager->persist($category);

        $category2 = new Category();
        $category2->setTitle('category2');
        $entityManager->persist($category2);

        $advert = new Advert();
        $advert->setTitle('Original title');
        $advert->setContent('Original content');
        $advert->setAuthor($user);
        $advert->setCategory($category);

        $entityManager->persist($advert);
        $entityManager->flush();

        $advertId = $advert->getId();

        // when
        $crawler = $this->httpClient->request(
            'GET',
            self::TEST_ROUTE . '/' . $advertId . '/edit'
        );

        $form = $crawler->filter('form')->form([
            'advert[title]' => 'Updated title2',
            'advert[category]' => $category2->getId(),
            'advert[tags]' => 'tag12, tag22',
            'advert[content]' => 'Updated content2',
        ]);

        $this->httpClient->submit($form);

        // then
        $this->assertResponseRedirects();

        $this->httpClient->followRedirect();

        $this->assertSelectorExists('.alert-success');

        $entityManager->clear();

        $updatedAdvert = $entityManager
            ->getRepository(Advert::class)
            ->find($advertId);

        $this->assertNotNull($updatedAdvert);
        $this->assertSame('Updated title2', $updatedAdvert->getTitle());
        $this->assertSame('Updated content2', $updatedAdvert->getContent());
        $this->assertSame($category2->getId(), $updatedAdvert->getCategory()->getId());

        $this->assertCount(2, $updatedAdvert->getTags());

        $tagTitles = $updatedAdvert->getTags()
            ->map(fn (Tag $tag) => $tag->getTitle())
            ->toArray();

        sort($tagTitles);

        $this->assertSame(['tag12', 'tag22'], $tagTitles);
    }

    /**
     * Test delete advert.
     */
    public function testDeleteAdvert(): void
    {
        // given
        $user = $this->createUser([UserRole::ROLE_USER->value]);
        $this->httpClient->loginUser($user);

        $entityManager = static::getContainer()->get('doctrine.orm.entity_manager');

        $category = new Category();
        $category->setTitle('category');
        $entityManager->persist($category);

        $advert = new Advert();
        $advert->setTitle('Advert to delete');
        $advert->setContent('Advert content');
        $advert->setAuthor($user);
        $advert->setCategory($category);

        $entityManager->persist($advert);
        $entityManager->flush();

        $advertId = $advert->getId();

        // when
        $crawler = $this->httpClient->request(
            'GET',
            self::TEST_ROUTE . '/' . $advertId . '/delete'
        );

        $this->assertResponseIsSuccessful();

        $form = $crawler->filter('form')->form();

        $this->httpClient->submit($form);

        // then
        $this->assertResponseRedirects();

        $this->httpClient->followRedirect();

        $this->assertSelectorExists('.alert-success');

        $entityManager->clear();

        $deletedAdvert = $entityManager
            ->getRepository(Advert::class)
            ->find($advertId);

        $this->assertNull($deletedAdvert);
    }

    /**
     * Create user.
     *
     * @param array $roles User roles
     *
     * @return User User entity
     */
    private function createUser(array $roles): User
    {
        $passwordHasher = static::getContainer()->get('security.password_hasher');
        $user = new User();
        $user->setEmail('some_user@example.com');
        $user->setRoles($roles);
        $user->setPassword(
            $passwordHasher->hashPassword($user, 'some_user1234')
        );
        $userRepository = static::getContainer()->get(UserRepository::class);
        $userRepository->save($user);

        return $user;
    }
}
