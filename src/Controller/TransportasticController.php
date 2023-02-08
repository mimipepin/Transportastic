<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TransportasticController extends AbstractController
{
    #[Route('/', name: 'app_transportastic_home')]
    public function index(): Response
    {
        return $this->render('transportastic/index.html.twig', [
            'controller_name' => 'TransportasticController',
        ]);
    }
}
