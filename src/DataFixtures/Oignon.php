<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Oignon extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $oignon1 = new Oignon();
        $manager->persist($oignon1);
        $oignon2 = new Oignon();
        $manager->persist($oignon2);
        $oignon3 = new Oignon();
        $manager->persist($oignon3);
        $manager->flush();
    }
}
