<?php

namespace App\Form\Type;

use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ArticleType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Titre',
            ])
            ->add('content', CKEditorType::class)
            ->add('submit', SubmitType::class, [
                'label' => 'Envoyer',
            ]);
    }
}