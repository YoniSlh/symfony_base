<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Commentaire;

class CommentaireFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $commentaire = new Commentaire();
        $commentaire->setContenu('Super burger !');
        $manager->persist($commentaire);
        $manager->flush();
    }
}
