<?php

namespace App\Controller;

use App\Entity\Burger;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BurgerController extends AbstractController
{
    private array $burgers = [
        1 => ['id' => 1, 'name' => 'Classic Burger', 'price' => 5.50, 'description' => 'C\'est un burger mais classic', 'image' => 'classic-burger.png'],
        2 => ['id' => 2, 'name' => 'Bacon Burger', 'price' => 6.00, 'description' => 'Un burger avec du bacon', 'image' => 'bacon-burger.jpeg'],
    ];
    
    #[Route('/burgers', name: 'burgers_list', methods: ['GET'])]
    public function list(): Response
    {
        return $this->render('burgers_list.html.twig', [
            'burgers' => $this->burgers,
        ]);
    }

    #[Route('/burgers/{id}', name: 'burgers_show', methods: ['GET'])]
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
}
