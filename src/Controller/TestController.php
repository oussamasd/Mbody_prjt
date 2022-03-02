<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;

use phpDocumentor\Reflection\Types\This;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function index(): Response
    {
        return $this->render('test/index.html.twig');
    }
    /**
     * @Route ("/test/profileuser/{id}",name="profileuser")
     */
    public function profileuser(User $user, Request $request)
    {
        ;
    }
}

