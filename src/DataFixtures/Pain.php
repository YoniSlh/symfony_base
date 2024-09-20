<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Pain extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $pain1 = new Pain();
        $manager->persist($pain1);
        $pain2 = new Pain();
        $manager->persist($pain2);
        $pain3 = new Pain();
        $manager->persist($pain3);
        $manager->flush();
    }
}
