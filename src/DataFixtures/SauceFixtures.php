<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SauceFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $sauce1 = new SauceFixtures();
        $manager->persist($sauce1);
        $sauce2 = new SauceFixtures();
        $manager->persist($sauce2);
        $sauce3 = new SauceFixtures();
        $manager->persist($sauce3);
        $manager->flush();
    }
}
