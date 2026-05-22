<?php
/**
 * Advert controller tests.
 */

namespace App\Tests\Controller;

use App\Entity\Enum\UserRole;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use App\Dto\AdvertListInputFiltersDto;
use App\Entity\Advert;
use App\Resolver\AdvertListInputFiltersDtoResolver;
use App\Entity\User;
use App\Form\Type\AdvertType;
use App\Service\AdvertService;
use App\Service\CategoryServiceInterface;
use Doctrine\ORM\Exception\ORMException;
use Doctrine\ORM\OptimisticLockException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;
use Symfony\Component\HttpKernel\Attribute\MapQueryString;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;

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

//    /**
//     * Test redirect
//     */
//    public function testRedirectIndexRoute(): void
//    {
//        // given
//        $expectedStatusCode = 302;
//
//        // when
//        $this->httpClient->request('GET', self::TEST_ROUTE);
//        $givenStatusCode=$this->httpClient->getResponse()->getStatusCode();
//
//        // then
//        $this->assertEquals($givenStatusCode, $expectedStatusCode);
//    }

    /**
     * Test '/advert' index
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

//    /**
//     * Test index route for user
//     */
//    public function testIndexRouteUser(): void
//    {
//        // given
//        $expectedStatusCode = 200;
//        $user = $this->createUser([UserRole::ROLE_USER->value]);
//        $this->httpClient->loginUser($user);
//
//        // when
//        $this->httpClient->request('GET', self::TEST_ROUTE);
//        $resultStatusCode = $this->httpClient->getResponse()->getStatusCode();
//
//        // then
//        $this->assertEquals($expectedStatusCode, $resultStatusCode);
//    }
//
//    /**
//     * Test index route for admin
//     */
//    public function testIndexRouteAdmin(): void
//    {
//        // given
//        $expectedStatusCode = 200;
//        $user = $this->createUser([UserRole::ROLE_USER->value, UserRole::ROLE_USER->value]);
//        $this->httpClient->loginUser($user);
//
//        // when
//        $this->httpClient->request('GET', self::TEST_ROUTE);
//        $resultStatusCode = $this->httpClient->getResponse()->getStatusCode();
//
//        // then
//        $this->assertEquals($expectedStatusCode, $resultStatusCode);
//    }
//
//    /**
//     * Create user helper
//     */
//    private function createUser(): User
//    {
//        $passwordHasher = static::getContainer()->get('security.password_hasher');
//        $userRepository = static::getContainer()->get(UserRepository::class);
//
//        $user = new User();
//        $user->setEmail('user%d@example.com');
//        $user->setRoles(['ROLE_USER']);
//        $user->setPassword($passwordHasher->hashPassword($user, 'user1234'));
//
//        $userRepository->save($user);
//
//        return $user;
//    }
//
//    /**
//     * Create admin helper
//     */
//    private function createAdminUser(array $roles): User
//    {
//        $passwordHasher = static::getContainer()->get('security.password_hasher');
//        $userRepository = static::getContainer()->get(UserRepository::class);
//
//        $user = new User();
//        $user->setEmail('admin%d@example.com');
//        $user->setRoles($roles);
//        $user->setPassword($passwordHasher->hashPassword($user, 'admin1234'));
//
//        $userRepository->save($user);
//
//        return $user;
//    }
}

