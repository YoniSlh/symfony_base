<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Pain;

class PainFixtures extends Fixture
{
    public const PAIN_REFERENCE = 'Pain';
    public function load(ObjectManager $manager): void
    {
        $pain1 = new \App\Entity\Pain();
        $pain1->setName("Pain complet");
        $manager->persist($pain1);
        $manager->flush();
    }
}
