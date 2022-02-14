<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("/category", name="category")
     */
    public function index(): Response
    {

        $categories= $this->getDoctrine()->getRepository(Category::class)->findAll();
        return $this->render('category/index.html.twig', [
            'categories' => $categories ,
        ]);
    }
    /**
     * @Route("/addCategory",name="categoryAdd")
     */
    public function add(Request $request)
    {
        $category= new Category();
        $form= $this->createForm(CategoryType::class,$category);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $em= $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();
            return $this->redirectToRoute("category");
        }
        return $this->render("category/add.html.twig",
            array("formCategory"=>$form->createView()));
    }
}
