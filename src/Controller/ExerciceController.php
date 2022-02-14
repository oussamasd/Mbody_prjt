<?php

namespace App\Controller;

use App\Entity\Exercice;
use App\Form\ExerciceType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExerciceController extends AbstractController
{
    /**
     * @Route("/exercice", name="exercice")
     */
    public function index(): Response
    {
        $exercices= $this->getDoctrine()->getRepository(Exercice::class)->findAll();
        return $this->render('exercice/index.html.twig', [
            'exercices' => $exercices ,
        ]);
    }

    /**
     * @Route("/addExercice",name="exerciceAdd")
     */
    public function add(Request $request)
    {
        $exercice= new Exercice();
        $form= $this->createForm(ExerciceType::class,$exercice);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em= $this->getDoctrine()->getManager();
            $em->persist($exercice);
            $em->flush();
            return $this->redirectToRoute("exercice");
        }
        return $this->render("exercice/add.html.twig",
            array("formExercice"=>$form->createView()));
    }
}
