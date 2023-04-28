<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Article;

class ArticleController extends AbstractController
{
    #[Route('/article', name: 'create_article')]
    public function createArticle(EntityManagerInterface $entityManager): Response
    {
        $article = new article();
        $article->setTitle('titre');
        $article->setContent('contenu');

        // tell Doctrine you want to (eventually) save the article (no queries yet)
        $entityManager->persist($article);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new article with id '.$article->getId());
    }
}
