<?php

/**
 * User service tests.
 */

namespace App\Tests\Service;

use App\Entity\Enum\UserRole;
use App\Entity\User;
use App\Service\UserService;
use App\Service\UserServiceInterface;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * Class UserServiceTest.
 */
class UserServiceTest extends KernelTestCase
{
    /**
     * User repository.
     */
    private ?EntityManagerInterface $entityManager;

    /**
     * User service.
     */
    private ?UserServiceInterface $userService;

    /**
     * Set up test.
     */
    public function setUp(): void
    {
        $container = static::getContainer();
        $this->entityManager = $container->get('doctrine.orm.entity_manager');
        $this->userService = $container->get(UserService::class);
    }

    /**
     * Test registration.
     */
    public function testRegistration(): void
    {
        // given
        $user = new User();
        $user->setEmail('someuser@example.com');
        $user->setPassword('password');

        // when
        $this->userService->save($user);

        // then
        $resultUser = $this->entityManager->createQueryBuilder()
            ->select('user')
            ->from(User::class, 'user')
            ->where('user.email = :email')
            ->setParameter(':email', 'someuser@example.com', Types::STRING)
            ->getQuery()
            ->getSingleResult();

        $this->assertNotNull($resultUser);
        $this->assertEquals('someuser@example.com', $resultUser->getEmail());
        $this->assertContains('ROLE_USER', $resultUser->getRoles());
        $this->assertNotEmpty(UserRole::cases());
    }

    /**
     * Test get paginated list.
     */
    public function testGetPaginatedList(): void
    {
        // given
        $page = 1;
        $dataSetSize = 5;

        $counter = 0;
        while ($counter < $dataSetSize) {
            $user = new User();
            $user->setEmail('user'.$counter.'@example.com');
            $user->setPassword('password');
            $this->entityManager->persist($user);
            ++$counter;
        }
        $this->entityManager->flush();

        // when
        $result = $this->userService->getPaginatedList($page);

        // then
        $this->assertGreaterThanOrEqual($dataSetSize, $result->count());
    }

    /**
     * Test delete.
     */
    public function testDelete(): void
    {
        // given
        $user = new User();
        $user->setEmail('someuser@example.com');
        $user->setPassword('password');
        $this->entityManager->persist($user);
        $this->entityManager->flush();
        $userId = $user->getId();

        // when
        $this->userService->delete($user);

        // then
        $resultUser = $this->entityManager->createQueryBuilder()
            ->select('user')
            ->from(User::class, 'user')
            ->where('user.id = :id')
            ->setParameter(':id', $userId, Types::INTEGER)
            ->getQuery()
            ->getOneOrNullResult();

        $this->assertNull($resultUser);
    }
}
