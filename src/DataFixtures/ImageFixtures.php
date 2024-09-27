<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ImageFixtures extends Fixture
{
    public const IMAGE_REFERENCE = 'Image';
    public function load(ObjectManager $manager): void
    {
        $image = new \App\Entity\Image();
        $image->setUrl('https://www.burgerquizz.fr/wp-content/uploads/2019/10/burger-quiz-1.jpg');
        $manager->persist($image);
        
        $image = new \App\Entity\Image();
        $image->setUrl('https://www.burgerquizz.fr/wp-content/uploads/2019/10/burger-quiz-2.jpg');
        $manager->persist($image);
        $manager->flush();
    }
}
