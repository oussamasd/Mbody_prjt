<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Exercice;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ExerciceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_Exercice')
            ->add('dure_Exercice')
            ->add('description_Exercice')
            ->add('category', EntityType::class, array(
                'class' => Category::class,
                'choice_label' => 'nom_cat',))
            ->add('Add',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Exercice::class,
        ]);
    }
}
