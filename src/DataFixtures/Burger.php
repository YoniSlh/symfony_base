<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Burger extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $burger = new \App\Entity\Burger();
        $burger->setName('Cheeseburger');
        $burger->setPrice(5.99);
        $burger->setDescription('Un très bon burger.');
        $manager->persist($burger);
        
        $burger = new \App\Entity\Burger();
        $burger->setName('Classic burger');
        $burger->setPrice(4.99);
        $burger->setDescription('Un burger classique.');
        $manager->persist($burger);

        $manager->flush();
    }
}
