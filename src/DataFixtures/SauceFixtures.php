<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Sauce extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $sauce1 = new Sauce();
        $manager->persist($sauce1);
        $sauce2 = new Sauce();
        $manager->persist($sauce2);
        $sauce3 = new Sauce();
        $manager->persist($sauce3);
        $manager->flush();
    }
}
