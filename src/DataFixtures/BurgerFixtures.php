<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class Burger extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $pain = $this->getReference(PainFixtures::PAIN_REFERENCE . '' . 1);
        $image = $this->getReference(ImageFixtures::IMAGE_REFERENCE . '' . 1);

        $burger1 = new \App\Entity\Burger();
        $burger1->setName('Cheeseburger');
        $burger1->setPrice(5.99);
        $manager->persist($burger1);

        $manager->flush();
    }
    // Spécifie que cette fixture dépend de PainFixtures
    public function getDependencies()
    {
        return [
            PainFixtures::class,
        ];
    }
}
