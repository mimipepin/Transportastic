<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(ArticleRepository $articleRepo): Response
    {
        $articles = $articleRepo->findAll();
        return $this->render('blog/index.html.twig', compact('articles'));
    }

    #[Route('/blog/{article}', name: 'app_blog_article')]
    public function showArticle(Article $article): Response
    {
        return $this->render('article/index.html.twig', compact('article'));
    }
}
