<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlayerController extends AbstractController
{
    #[Route('/game', name: 'app_player')]
    public function game(): Response
    {
        return $this->render('game/show.html.twig', [
            'controller_name' => 'PlayerController',
        ]);
    }
    
    
}
