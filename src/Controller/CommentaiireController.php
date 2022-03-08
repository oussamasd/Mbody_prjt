<?php

namespace App\Controller;

use App\Entity\Activity;
use App\Entity\Commentaire;
use App\Entity\User;
use App\Repository\ActivityRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentaiireController extends AbstractController
{

    /**
     * @Route("/commentaiire/{idAct}", name="commentaiire")
     */
    public function index($idAct): Response
    {
        $activity=$this->getDoctrine()->getRepository(Activity::class)->find($idAct);
        if($activity==null){
            return $this->render('commentaiire/index.html.twig', [
                'controller_name' => 'CommentaiireController',
            ]);
        }
        $commentaires = $activity->getCommentaires();
        $dt=array();
        foreach ($commentaires as $key =>$cat){
            $dt[$key]['id'] = $cat->getId();
            $dt[$key]['iduser'] = $cat->getIduser()->getNom();
            $dt[$key]['textcommentaire'] = $cat->getTextcommentaire();
            $dt[$key]['dateCom'] = $cat->getDateCom();

            // $dt[$key]['images'] = $cat->getDureExercice();

        }
        return new JsonResponse($dt);

    }
    /**
     * @Route("/commentaiire/add/{msg}/{idAct}", name="commentaiireadd")
     */
    public function index2($idAct , $msg ): Response
    {
        //$user=$this->getUser();
        $user = $this->getDoctrine()->getRepository(User::class)->find(1);
        $cm = new Commentaire();
        $cm->setIduser($user);

        $dte=date('Y-m-d h:m');
        var_dump($dte);

        $activity=$this->getDoctrine()->getRepository(Activity::class)->find($idAct);
        $cm->setActivity($activity);
        $cm->setTextcommentaire($msg);
        $cm->setDateCom($dte);
        $em=$this->getDoctrine()->getManager();
        $em->persist($cm);
        $em->flush();


        return new JsonResponse($cm);

    }
}
