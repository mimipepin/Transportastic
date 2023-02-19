<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TrainsController extends AbstractController
{
    #[Route('/trains', name: 'app_trains')]
    public function index(): Response
    {
        return $this->render('trains/index.html.twig', [
            'controller_name' => 'TrainsController',
        ]);
    }
}
