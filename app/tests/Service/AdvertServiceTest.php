<?php

/**
 * Advert service tests.
 */

namespace App\Tests\Service;

use App\Entity\Advert;
use App\Entity\Category;
use App\Entity\Tag;
use App\Entity\User;
use App\Service\AdvertService;
use App\Service\AdvertServiceInterface;
use App\Service\TagServiceInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * Class AdvertServiceTest.
 */
class AdvertServiceTest extends KernelTestCase
{
    /**
     * Advert repository.
     */
    private ?EntityManagerInterface $entityManager;

    /**
     * Advert service.
     */
    private ?AdvertServiceInterface $advertService;

    /**
     * Set up test.
     */
    public function setUp(): void
    {
        $container = static::getContainer();
        $this->entityManager = $container->get('doctrine.orm.entity_manager');
        $this->advertService = $container->get(AdvertService::class);
    }

    /**
     * Test create advert.
     */
    public function testCreateAdvertService(): void
    {
        // given
        $container = static::getContainer();

        $entityManager = $container->get('doctrine.orm.entity_manager');
        $advertService = $container->get(AdvertService::class);
        $tagService = $container->get(TagServiceInterface::class);

        $user = $this->createUser();

        $category = new Category();
        $category->setTitle('category');
        $entityManager->persist($category);
        $entityManager->flush();

        // when
        $advert = new Advert();
        $advert->setTitle('Test advert');
        $advert->setContent('Test advert content');
        $advert->setAuthor($user);
        $advert->setCategory($category);

        $tag1 = $tagService->findOneByTitle('tag1');
        if (!$tag1) {
            $tag1 = new Tag();
            $tag1->setTitle('tag1');
            $entityManager->persist($tag1);
        }

        $tag2 = $tagService->findOneByTitle('tag2');
        if (!$tag2) {
            $tag2 = new Tag();
            $tag2->setTitle('tag2');
            $entityManager->persist($tag2);
        }

        $entityManager->flush();

        $advert->addTag($tag1);
        $advert->addTag($tag2);

        $advertService->save($advert);

        // then
        $entityManager->clear();

        $savedAdvert = $entityManager
            ->getRepository(Advert::class)
            ->findOneBy(['title' => 'Test advert']);

        $this->assertNotNull($savedAdvert);
        $this->assertSame('Test advert', $savedAdvert->getTitle());
        $this->assertSame('Test advert content', $savedAdvert->getContent());
        $this->assertSame($user->getId(), $savedAdvert->getAuthor()->getId());
        $this->assertSame($category->getId(), $savedAdvert->getCategory()->getId());

        $this->assertCount(2, $savedAdvert->getTags());

        $tagTitles = $savedAdvert->getTags()
            ->map(fn (Tag $tag) => $tag->getTitle())
            ->toArray();

        sort($tagTitles);

        $this->assertSame(['tag1', 'tag2'], $tagTitles);
    }

    /**
     * Test edit advert.
     */
    public function testEditAdvertService(): void
    {
        // given
        $container = static::getContainer();

        $entityManager = $container->get('doctrine.orm.entity_manager');
        $advertService = $container->get(AdvertService::class);
        $tagService = $container->get(TagServiceInterface::class);

        $user = $this->createUser();

        $category = new Category();
        $category->setTitle('category');
        $entityManager->persist($category);

        $category2 = new Category();
        $category2->setTitle('category2');
        $entityManager->persist($category2);

        $entityManager->flush();

        $advert = new Advert();
        $advert->setTitle('Original title');
        $advert->setContent('Original content');
        $advert->setAuthor($user);
        $advert->setCategory($category);

        $tag1 = new Tag();
        $tag1->setTitle('tag1');
        $entityManager->persist($tag1);

        $tag2 = new Tag();
        $tag2->setTitle('tag2');
        $entityManager->persist($tag2);

        $entityManager->flush();

        $advert->addTag($tag1);
        $advert->addTag($tag2);

        $advertService->save($advert);

        $advertId = $advert->getId();

        // when
        $savedAdvert = $entityManager->getRepository(Advert::class)->find($advertId);

        $savedAdvert->setTitle('Updated title');
        $savedAdvert->setContent('Updated content');
        $savedAdvert->setCategory($category2);

        $savedAdvert->getTags()->clear();

        $tag3 = $tagService->findOneByTitle('tag3');
        if (!$tag3) {
            $tag3 = new Tag();
            $tag3->setTitle('tag3');
            $entityManager->persist($tag3);
        }

        $tag4 = $tagService->findOneByTitle('tag4');
        if (!$tag4) {
            $tag4 = new Tag();
            $tag4->setTitle('tag4');
            $entityManager->persist($tag4);
        }

        $entityManager->flush();

        $savedAdvert->addTag($tag3);
        $savedAdvert->addTag($tag4);

        $advertService->save($savedAdvert);

        // then
        $entityManager->clear();

        $updatedAdvert = $entityManager
            ->getRepository(Advert::class)
            ->find($advertId);

        $this->assertNotNull($updatedAdvert);
        $this->assertSame('Updated title', $updatedAdvert->getTitle());
        $this->assertSame('Updated content', $updatedAdvert->getContent());
        $this->assertSame($category2->getId(), $updatedAdvert->getCategory()->getId());

        $this->assertCount(2, $updatedAdvert->getTags());

        $tagTitles = $updatedAdvert->getTags()
            ->map(fn (Tag $tag) => $tag->getTitle())
            ->toArray();

        sort($tagTitles);

        $this->assertSame(['tag3', 'tag4'], $tagTitles);
    }

    /**
     * Test delete advert.
     */
    public function testDeleteAdvertService(): void
    {
        // given
        $container = static::getContainer();

        $entityManager = $container->get('doctrine.orm.entity_manager');
        $advertService = $container->get(AdvertService::class);

        $user = $this->createUser();

        $category = new Category();
        $category->setTitle('category');
        $entityManager->persist($category);

        $entityManager->flush();

        $advert = new Advert();
        $advert->setTitle('Advert to delete');
        $advert->setContent('Some content');
        $advert->setAuthor($user);
        $advert->setCategory($category);

        $entityManager->persist($advert);
        $entityManager->flush();

        $advertId = $advert->getId();

        // when
        $advertToDelete = $entityManager
            ->getRepository(Advert::class)
            ->find($advertId);

        $this->assertNotNull($advertToDelete);

        $advertService->delete($advertToDelete);

        // then
        $entityManager->clear();

        $deletedAdvert = $entityManager
            ->getRepository(Advert::class)
            ->find($advertId);

        $this->assertNull($deletedAdvert);
    }

    /**
     * Test get paginated list.
     */
    public function testGetPaginatedList(): void
    {
        // given
        $user = $this->createUser();
        $category = $this->createCategory();
        $page = 1;
        $dataSetSize = 3;

        $counter = 0;
        while ($counter < $dataSetSize) {
            $advert = new Advert();
            $advert->setTitle('Advert #'.$counter);
            $advert->setCategory($category);
            $advert->setContent('lorem ipsum');
            $advert->setAuthor($user);
            $advert->setCategory($category);
            $this->advertService->save($advert);
            ++$counter;
        }

        // when
        $result = $this->advertService->getPaginatedList($page, $user);

        // then
        $this->assertEquals($dataSetSize, $result->count());
    }

    /**
     * Helper to create Category.
     *
     * @return Category Category entity
     */
    private function createCategory(): Category
    {
        $category = new Category();
        $category->setTitle('category');
        $this->entityManager->persist($category);
        $this->entityManager->flush();

        return $category;
    }

    /**
     * Helper to create User.
     *
     * @return User User entity
     */
    private function createUser(): User
    {
        $user = new User();
        $user->setEmail('some_user@example.com');
        $user->setPassword('some_password');
        $this->entityManager->persist($user);
        $this->entityManager->flush();

        return $user;
    }
}
