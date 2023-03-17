<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Type\ArticleType;


class ArticlesController extends AbstractController
{
    #[Route('/articles', name: 'app_articles')]
    public function articles    (Request $request): Response
    {
        $defaultData = ['message' => 'Type your message here'];
      /*  $form = $this->createFormBuilder($defaultData)
            ->add('name', TextType::class)
            ->add('email', EmailType::class)
            ->add('message', TextareaType::class)
            ->add('send', SubmitType::class)
            ->getForm();
*/
        $form = $this->createForm(ArticleType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // data is an array with "name", "email", and "message" keys
            $data = $form->getData();
        }

        return $this->render('articles/index.html.twig', [
            'controller_name' => 'ArticlesController',
            'form' => $form
        ]);
    }


}
