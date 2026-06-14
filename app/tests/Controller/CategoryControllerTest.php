<?php

/**
 * Category Controller test.
 */

namespace App\Tests\Controller;

use App\Entity\Category;
use App\Entity\Enum\UserRole;
use App\Entity\User;
use App\Repository\CategoryRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class CategoryControllerTest.
 */
class CategoryControllerTest extends WebTestCase
{
    /**
     * Test route.
     *
     * @var string
     */
    public const TEST_ROUTE = '/category';

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
     * Test create category.
     */
    public function testCreateCategory(): void
    {
        // given
        $adminUser = $this->createUser([
            UserRole::ROLE_USER->value,
            UserRole::ROLE_ADMIN->value,
        ]);
        $this->httpClient->loginUser($adminUser);
        $categoryTitle = 'category';

        // when
        $crawler = $this->httpClient->request('GET', self::TEST_ROUTE.'/create');
        $form = $crawler->filter('button[type="submit"], input[type="submit"]')->first()->form([
            'category' => [
                'title' => $categoryTitle,
            ],
        ]);
        $this->httpClient->submit($form);

        // then
        $this->assertResponseRedirects(self::TEST_ROUTE);
        $this->httpClient->followRedirect();

        $this->assertSelectorExists('.alert-success');

        $categoryRepository = static::getContainer()->get(CategoryRepository::class);
        $createdCategory = $categoryRepository->findOneBy(['title' => $categoryTitle]);
        $this->assertNotNull($createdCategory);
    }

    /**
     * Test edit category.
     */
    public function testEditCategory(): void
    {
        // given
        $adminUser = $this->createUser([
            UserRole::ROLE_USER->value,
            UserRole::ROLE_ADMIN->value,
        ]);
        $this->httpClient->loginUser($adminUser);

        $entityManager = static::getContainer()->get('doctrine.orm.entity_manager');

        $category = new Category();
        $category->setTitle('original category');
        $entityManager->persist($category);
        $entityManager->flush();

        $categoryId = $category->getId();

        // when
        $crawler = $this->httpClient->request(
            'GET',
            self::TEST_ROUTE.'/'.$categoryId.'/edit'
        );

        $form = $crawler
            ->filter('button[type="submit"], input[type="submit"]')
            ->first()
            ->form([
                'category[title]' => 'updated category',
            ]);

        $this->httpClient->submit($form);

        // then
        $this->assertResponseRedirects(self::TEST_ROUTE);
        $this->httpClient->followRedirect();

        $this->assertSelectorExists('.alert-success');

        $entityManager->clear();

        $categoryRepository = static::getContainer()->get(CategoryRepository::class);
        $updatedCategory = $categoryRepository->find($categoryId);
        $this->assertNotNull($updatedCategory);
        $this->assertSame('updated category', $updatedCategory->getTitle());
    }

    /**
     * Test delete category.
     */
    public function testDeleteCategory(): void
    {
        // given
        $adminUser = $this->createUser([
            UserRole::ROLE_USER->value,
            UserRole::ROLE_ADMIN->value,
        ]);
        $this->httpClient->loginUser($adminUser);

        $entityManager = static::getContainer()->get('doctrine.orm.entity_manager');

        $category = new Category();
        $category->setTitle('category to delete');
        $entityManager->persist($category);
        $entityManager->flush();

        $categoryId = $category->getId();

        // when
        $crawler = $this->httpClient->request(
            'GET',
            self::TEST_ROUTE.'/'.$categoryId.'/delete'
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

        $categoryRepository = static::getContainer()->get(CategoryRepository::class);
        $deletedCategory = $categoryRepository->find($categoryId);
        $this->assertNull($deletedCategory);
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
