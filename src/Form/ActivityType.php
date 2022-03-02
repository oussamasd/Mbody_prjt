<?php

namespace App\Form;

use App\Entity\Activity;
use App\Entity\Category;
use App\Entity\Exercice;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;



class ActivityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_Act')
            ->add('date_Act',DateType::class,[
                'widget' => 'single_text',



                // prevents rendering it as type="date", to avoid HTML5 date pickers
                'html5' => true ,
                'required' => true,
                'empty_data' => '01/01/2000',

                // adds a class that can be selected in JavaScript
               ])
            ->add('temp_act')
            ->add('quantite')
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
            ->add('images', FileType::class,[
                'label' => false,
                'multiple' => true,
                'mapped' => false,
                'required' => false
            ])
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
