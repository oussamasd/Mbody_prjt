<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppMobileController extends AbstractController
{
    /**
     * @Route("/mobile", name="app_mobile")
     */
    public function index(): JsonResponse
    {
        $user= $this->getDoctrine()->getRepository(User::class)->findAll();
        $dt=array();
        foreach ($user as $key =>$usr){
            $dt[$key]['id'] = $usr->getId();
            $dt[$key]['cin'] = $usr->getCin();
            $dt[$key]['email'] = $usr->getUsername();
            $dt[$key]['nom'] = $usr->getNom();
            $dt[$key]['prenom'] =$usr->getPrenom();
            $dt[$key]['adresse'] = $usr->getAdresse();
            $dt[$key]['numero'] =$usr->getNumero();
            $dt[$key]['roles'] = $usr->getRoles();
            // $dt[$key]['images'] = $cat->getDureExercice();

        }
        return new JsonResponse($dt);
       // Écrire à projet pi

    }
}
