<?php

/**
 * Tag Controller test.
 */

namespace App\Tests\Controller;

use App\Entity\Tag;
use App\Entity\Enum\UserRole;
use App\Entity\User;
use App\Repository\TagRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class TagControllerTest.
 */
class TagControllerTest extends WebTestCase
{
    /**
     * Test route.
     *
     * @var string
     */
    public const TEST_ROUTE = '/tag';

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
     * Test index route for admin user.
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
     * Test create tag.
     */
    public function testCreateTag(): void
    {
        // given
        $adminUser = $this->createUser([
            UserRole::ROLE_USER->value,
            UserRole::ROLE_ADMIN->value,
        ]);
        $this->httpClient->loginUser($adminUser);
        $tagTitle = 'tag';

        // when
        $crawler = $this->httpClient->request('GET', self::TEST_ROUTE.'/create');
        $form = $crawler->filter('button[type="submit"], input[type="submit"]')->first()->form([
            'tag' => [
                'title' => $tagTitle,
            ],
        ]);
        $this->httpClient->submit($form);

        // then
        $this->assertResponseRedirects(self::TEST_ROUTE);
        $this->httpClient->followRedirect();

        $this->assertSelectorExists('.alert-success');

        $tagRepository = static::getContainer()->get(TagRepository::class);
        $createdTag = $tagRepository->findOneBy(['title' => $tagTitle]);
        $this->assertNotNull($createdTag);
    }

    /**
     * Test delete tag.
     */
    public function testDeleteTag(): void
    {
        // given
        $adminUser = $this->createUser([
            UserRole::ROLE_USER->value,
            UserRole::ROLE_ADMIN->value,
        ]);
        $this->httpClient->loginUser($adminUser);

        $entityManager = static::getContainer()->get('doctrine.orm.entity_manager');

        $tag = new Tag();
        $tag->setTitle('tag to delete');
        $entityManager->persist($tag);
        $entityManager->flush();

        $tagId = $tag->getId();

        // when
        $crawler = $this->httpClient->request(
            'GET',
            self::TEST_ROUTE.'/'.$tagId.'/delete'
        );

        $this->assertResponseIsSuccessful();

        $form = $crawler
            ->filter('form')
            ->form();

        $this->httpClient->submit($form);

        // then
        $this->assertResponseRedirects(self::TEST_ROUTE);
        $this->httpClient->followRedirect();

        $this->assertSelectorExists('.alert-success');

        $entityManager->clear();

        $tagRepository = static::getContainer()->get(TagRepository::class);
        $deletedTag = $tagRepository->find($tagId);
        $this->assertNull($deletedTag);
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
        $user->setEmail('admin1@example.com');
        $user->setRoles($roles);
        $user->setPassword(
            $passwordHasher->hashPassword($user, 'admin1234')
        );
        $userRepository = static::getContainer()->get(UserRepository::class);
        $userRepository->save($user);

        return $user;
    }
}
