<?php

/**
 * Advert fixtures.
 */

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Advert;
use App\Entity\User;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use App\Entity\Tag;

/**
 * Class AdvertFixtures.
 */
class AdvertFixtures extends AbstractBaseFixtures implements DependentFixtureInterface
{
    /**
     * Load data.
     *
     * @psalm-suppress PossiblyNullPropertyFetch
     * @psalm-suppress PossiblyNullReference
     * @psalm-suppress UnusedClosureParam
     */
    public function loadData(): void
    {
        if (null === $this->manager || null === $this->faker) {
            return;
        }

        $this->createMany(100, 'adverts', function (int $i) {
            $advert = new Advert();
            $advert->setTitle($this->faker->sentence);
            $advert->setContent($this->faker->realText);
            $advert->setCreatedAt(
                \DateTimeImmutable::createFromMutable(
                    $this->faker->dateTimeBetween('-100 days', '-1 days')
                )
            );
            $advert->setUpdatedAt(
                \DateTimeImmutable::createFromMutable(
                    $this->faker->dateTimeBetween('-100 days', '-1 days')
                )
            );
            /** @var Category $category */
            $category = $this->getRandomReference('category', Category::class);
            $advert->setCategory($category);

            /** @var Tag[] $tags */
            $tags = $this->getRandomReferenceList('tag', Tag::class, $this->faker->numberBetween(0, 5));
            foreach ($tags as $tag) {
                $advert->addTag($tag);
            }

            /** @var User $author */
            $author = $this->getRandomReference('user', User::class);
            $advert->setAuthor($author);

            return $advert;
        });
    }

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on.
     *
     * @return string[] of dependencies
     *
     * @psalm-return array{0: CategoryFixtures::class}
     */
    public function getDependencies(): array
    {
        return [CategoryFixtures::class, TagFixtures::class, UserFixtures::class];
    }
}
