<?php

namespace App\Form;

use App\Entity\Activity;
use App\Entity\Category;
use App\Entity\Exercice;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ActivityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_Act')
            ->add('date_Act')
            ->add('temp_act')
            ->add('description_Act')

            ->add('category', EntityType::class, array(
                'class' => Category::class,
                'choice_label' => 'nom_cat',
                ))
            ->add('exercices', EntityType::class, array(
                'class' => Exercice::class,
                'choice_label' => 'nom_Exercice',
                'multiple' =>true,
                'expanded' =>true
                ))

            ->add('Add',SubmitType::class)

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Activity::class,
        ]);
    }
}
