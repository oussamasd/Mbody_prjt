<?php

namespace App\Controller;

use App\Entity\Exercice;
use App\Form\ExerciceType;
use App\Repository\ExerciceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
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
       /* return $this->render('exercice/index.html.twig', [
            'exercices' => $exercices ,
        ]);*/
        $dt=array();
        foreach ($exercices as $key =>$cat){
            $dt[$key]['id'] = $cat->getId();
            $dt[$key]['nom_Exercice'] = $cat->getNomExercice();
            $dt[$key]['description_Exercice'] = $cat->getDescriptionExercice();
            $dt[$key]['categoryId'] = $cat->getCategory()->getId();
            $dt[$key]['categoryNom'] =$cat->getCategory()->getNomCat();
            $dt[$key]['dure_Exercice'] = $cat->getDureExercice();

        }
        return new JsonResponse($dt);
    }

    /**
     * @Route("/addExercice",name="exerciceAdd")
     */
    public function add(Request $request)
    {
        $exercices= $this->getDoctrine()->getRepository(Exercice::class)->findAll();

        $exercice= new Exercice();
        $form= $this->createForm(ExerciceType::class,$exercice);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em= $this->getDoctrine()->getManager();
            $em->persist($exercice);
            $em->flush();
            return $this->redirectToRoute("exerciceAdd");
        }
        return $this->render("exercice/add.html.twig",
            array("formExercice"=>$form->createView(),'exercices' => $exercices ,));
    }
    /**
     * @Route("/updateExercice/{id}",name="ExerciceUpdate")
     */
    public function updateExercice(ExerciceRepository $s,$id,Request $request)
    {
        $exercices= $this->getDoctrine()->getRepository(Exercice::class)->findAll();

        $exercice= $s->find($id);
        //var_dump($student).die();
        $form= $this->createForm(ExerciceType::class,$exercice);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $em= $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("exerciceAdd");
        }
        return $this->render("exercice/add.html.twig", array("formExercice"=>$form->createView(),'exercices' => $exercices ,));
    }
    /**
     * @Route("/DeleteExercice/{id}",name="ExerciceDelete")
     */
    public function delete($id){
        $exercice= $this->getDoctrine()->getRepository(Exercice::class)->find($id);
        $em= $this->getDoctrine()->getManager();
        $em->remove($exercice);
        $em->flush();
        return $this->redirectToRoute("exerciceAdd");
    }
}
