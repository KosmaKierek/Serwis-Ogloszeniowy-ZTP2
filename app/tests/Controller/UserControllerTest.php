<?php

/**
 * User controller tests.
 */

namespace App\Tests\Controller;

use App\Entity\Enum\UserRole;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;

/**
 * Class UserControllerTest.
 */
class UserControllerTest extends WebTestCase
{
    /**
     * Test route.
     */
    public const TEST_ROUTE = '/user';

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
     * Test delete user.
     */
    public function testDeleteUserAction(): void
    {
        // given
        $admin = $this->createAdmin([
            UserRole::ROLE_USER->value,
            UserRole::ROLE_ADMIN->value,
        ]);
        $this->httpClient->loginUser($admin);

        $user = $this->createUser([UserRole::ROLE_USER->value]);
        $userId = $user->getId();

        $crawler = $this->httpClient->request(
            'GET',
            self::TEST_ROUTE.'/'.$userId.'/delete'
        );

        $this->assertResponseIsSuccessful();

        // when
        $form = $crawler
            ->filter('form')
            ->form();

        $this->httpClient->submit($form);

        // then
        $this->assertResponseRedirects(self::TEST_ROUTE);
        $this->httpClient->followRedirect();

        $this->assertSelectorExists('.alert-success');

        $entityManager = static::getContainer()->get('doctrine.orm.entity_manager');
        $entityManager->clear();

        $userRepository = static::getContainer()->get(UserRepository::class);
        $deletedUser = $userRepository->find($userId);

        $this->assertNull($deletedUser);
    }

    /**
     * Create admin.
     *
     * @param array $roles User roles
     *
     * @return User User entity
     */
    private function createAdmin(array $roles): User
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
        $user->setEmail('user1@example.com');
        $user->setRoles($roles);
        $user->setPassword(
            $passwordHasher->hashPassword($user, 'user1234')
        );
        $userRepository = static::getContainer()->get(UserRepository::class);
        $userRepository->save($user);

        return $user;
    }
}
