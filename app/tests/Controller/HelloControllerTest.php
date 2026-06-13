<?php
/**
 * Hello controller tests.
 */

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use App\Entity\User;
use App\Entity\Enum\UserRole;
use App\Repository\UserRepository;

/**
 * Class HelloControllerTest.
 */
class HelloControllerTest extends WebTestCase
{
    /**
     * Test route.
     *
     * @var string
     */
    public const TEST_ROUTE = '/';

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
     * Test '/' index.
     */
    public function testIndexRoute(): void
    {
        // given
        $expectedStatusCode = 302;

        // when
        $this->httpClient->request('GET', self::TEST_ROUTE);
        $givenStatusCode=$this->httpClient->getResponse()->getStatusCode();

        // then
        $this->assertEquals($givenStatusCode, $expectedStatusCode);
        //$this->assertSelectorExists('html');
    }

    /**
     * Test index route for user.
     */
    public function testIndexRouteAdminUser(): void
    {
        // given
        $expectedStatusCode = 302;
        $adminUser = $this->createUser([UserRole::ROLE_USER->value]);
        $this->httpClient->loginUser($adminUser);

        // when
        $this->httpClient->request('GET', self::TEST_ROUTE);
        $resultStatusCode = $this->httpClient->getResponse()->getStatusCode();

        // then
        $this->assertEquals($expectedStatusCode, $resultStatusCode);
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
