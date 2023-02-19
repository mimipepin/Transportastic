<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TramsController extends AbstractController
{
    #[Route('/trams', name: 'app_trams')]
    public function index(): Response
    {
        return $this->render('trams/index.html.twig', [
            'controller_name' => 'TramsController',
        ]);
    }
}
