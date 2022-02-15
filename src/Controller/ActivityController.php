<?php

namespace App\Controller;

use App\Entity\Activity;
use App\Form\ActivityType;
use App\Repository\ActivityRepository;
use App\Repository\ExerciceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function PHPSTORM_META\map;

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
        $activityAll= $this->getDoctrine()->getRepository(Activity::class)->findAll();

        $activity= new Activity();
        $form= $this->createForm(ActivityType::class,$activity);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em= $this->getDoctrine()->getManager();
            $em->persist($activity);
            $em->flush();
            return $this->redirectToRoute("activityAdd");
        }
        return $this->render("activity/add.html.twig",
            array("formActivity"=>$form->createView() , 'activities' => $activityAll ,));
    }
    /**
     * @Route("/updateActivite/{id}",name="ActivityUpdate")
     */
    public function updateActivite(ActivityRepository   $s,$id,Request $request)
    {
        $activityAll= $this->getDoctrine()->getRepository(Activity::class)->findAll();

        $activity= $s->find($id);
        //var_dump($student).die();
        $form= $this->createForm(ActivityType::class,$activity);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $em= $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("activityAdd");
        }
        return $this->render("activity/add.html.twig", array("formActivity"=>$form->createView(),'activities' => $activityAll ,));
    }
    /**
     * @Route("/DeleteActivity/{id}",name="ActivityDelete")
     */
    public function delete($id){
        $activity= $this->getDoctrine()->getRepository(Activity::class)->find($id);
        $em= $this->getDoctrine()->getManager();
        $em->remove($activity);
        $em->flush();
        return $this->redirectToRoute("activityAdd");
    }
    /**
     * @Route("/activitySchedule", name="activitySchedule")
     */
    public function Schedule(): Response
    {









            return $this->render('activity/schedule.html.twig');
    }
}
