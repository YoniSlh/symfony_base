<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Commentaire extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $commentaire1 = new Commentaire();
        $manager->persist($commentaire1);
        $commentaire2 = new Commentaire();
        $manager->persist($commentaire2);
        $commentaire3 = new Commentaire();
        $manager->persist($commentaire3);
        $manager->flush();
    }
}
