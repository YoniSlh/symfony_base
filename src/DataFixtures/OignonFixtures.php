<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class OignonFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $oignon1 = new OignonFixtures();
        $manager->persist($oignon1);
        $oignon2 = new OignonFixtures();
        $manager->persist($oignon2);
        $oignon3 = new OignonFixtures();
        $manager->persist($oignon3);
        $manager->flush();
    }
}
