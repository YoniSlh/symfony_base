<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Oignon;

class OignonController extends AbstractController
{
    #[Route('/oignon', name: 'app_oignon')]
    public function index(): Response
    {
        return $this->render('oignon/index.html.twig', [
            'controller_name' => 'OignonController',
        ]);
    }

    #[Route('/oignon/create', name: 'oignon_create')]
    public function create(EntityManagerInterface $entityManager): Response
    {
        $oignon = new Oignon();
        $oignon->setName('Oignon rouge');

        // Persister et sauvegarder l'oignon
        $entityManager->persist($oignon);
        $entityManager->flush();

        return new Response('Oignon créé avec succès !');
    }

    #[Route('/oignon', name: 'oignon_list')]
    public function list(EntityManagerInterface $entityManager): Response
    {
        // Récupérer tous les enregistrements de l'entité Oignon
        $oignons = $entityManager->getRepository(Oignon::class)->findAll();

        // Si tu veux juste retourner un texte
        // return new Response(implode(', ', array_map(fn($oignon) => $oignon->getName(), $oignons)));

        // Sinon tu peux retourner une vue Twig avec les données
        return $this->render('oignon/list.html.twig', [
            'oignons' => $oignons,
        ]);
    }
}
