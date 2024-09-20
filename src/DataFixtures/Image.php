<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Image extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $image1 = new Image();
        $manager->persist($image1);
        $image2 = new Image();
        $manager->persist($image2);
        $image3 = new Image();
        $manager->persist($image3);
        $manager->flush();
    }
}
