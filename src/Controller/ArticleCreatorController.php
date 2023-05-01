<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Type\ArticleType;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Article;


class ArticleCreatorController extends AbstractController
{
    #[Route('/article_creator', name: 'app_article_creator')]
    public function articles    (Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ArticleType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // data is an array with "title", "editor" keys
            $data = $form->getData();
            //dd($data);
            

            $article = new article();
            $article->setTitle($data["title"]);
            $article->setContent($data["editor_hidden"]);

            // tell Doctrine you want to (eventually) save the article (no queries yet)
            $entityManager->persist($article);

            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();
        }

        return $this->render('articles/index.html.twig', [
            'controller_name' => 'ArticlesController',
            'form' => $form
        ]);
    }


}


//https://symfonycasts.com/screencast/symfony-forms/flash-messages