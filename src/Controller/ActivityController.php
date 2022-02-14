<?php

namespace App\Controller;

use App\Entity\Activity;
use App\Form\ActivityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActivityController extends AbstractController
{
    /**
     * @Route("/activity", name="activity")
     */
    public function index(): Response
    {
        $activity= $this->getDoctrine()->getRepository(Activity::class)->findAll();
        return $this->render('activity/index.html.twig', [
            'activities' => $activity ,
        ]);
    }
    /**
     * @Route("/addActivity",name="activityAdd")
     */
    public function add(Request $request)
    {
        $activity= new Activity();
        $form= $this->createForm(ActivityType::class,$activity);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em= $this->getDoctrine()->getManager();
            $em->persist($activity);
            $em->flush();
            return $this->redirectToRoute("activity");
        }
        return $this->render("activity/add.html.twig",
            array("formActivity"=>$form->createView()));
    }
}
