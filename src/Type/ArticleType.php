<?php

namespace App\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ArticleType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Title',
            ])
            ->add('editor_hidden', HiddenType::class)
            ->add('imageFile', VichImageType::class, [
                'label' => 'Thumbnail'
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Submit',
            ]);
    }
}