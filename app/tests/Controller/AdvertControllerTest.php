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

    /**
     * Test index route for user.
     */
    public function testIndexRouteAdminUser(): void
    {
        // given
        $expectedStatusCode = 200;
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

