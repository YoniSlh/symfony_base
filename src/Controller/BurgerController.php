<?php

namespace App\Controller;

use App\Entity\Burger;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Pain;

class BurgerController extends AbstractController
{
    private array $burgers = [];

    #[Route('/burgers', name: 'burgers_list', methods: ['GET'])]
    public function list(): Response
    {
        return $this->render('burgers_list.html.twig', [
            'burgers' => $this->burgers,
        ]);
    }

    #[Route('/burgers/show/{id}', name: 'burgers_show', methods: ['GET'])]
    public function show(int $id): Response
    {
        if (!isset($this->burgers[$id])) {
            throw $this->createNotFoundException('Le burger demandé n\'existe pas.');
        }

        $burger = $this->burgers[$id];

        return $this->render('burgers_show.html.twig', [
            'burger' => $burger,
        ]);
    }

    #[Route('/burgers/create', name: 'burger_create')]
    public function create(EntityManagerInterface $entityManager): Response
    {
        $pain = new Pain();
        $pain->setName('Pain complet');

        $burger = new Burger();
        $burger->setName('Krabby Patty');
        $burger->setPrice(4.99);
        $burger->setPain($pain);

        // Persister et sauvegarder le nouveau burger
        $entityManager->persist($burger);
        $entityManager->persist($pain);
        $entityManager->flush();

        return new Response('Burger créé avec succès !');
    }
}
