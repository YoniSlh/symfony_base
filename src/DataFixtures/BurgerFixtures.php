<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class Burger extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $pain = $this->getReference(PainFixtures::PAIN_REFERENCE . '' . 0);
        $image = $this->getReference(ImageFixtures::IMAGE_REFERENCE . '' . 0);

        $burger = new \App\Entity\Burger();
        $burger->setName('Cheeseburger');
        $burger->setPrice(5.99);
        $manager->persist($burger);

        $burger = new \App\Entity\Burger();
        $burger->setName('Classic burger');
        $burger->setPrice(4.99);
        $manager->persist($burger);

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
