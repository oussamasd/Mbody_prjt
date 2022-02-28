<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class CategoryController extends AbstractController
{
    /**
     * @Route("/category", name="category" )
     *
     */
    public function index(): Response
    {

        $categories= $this->getDoctrine()->getRepository(Category::class)->findAll();
        /*$ha=new Serializer([new ObjectNormalizer()]);

        $for = $ha->normalize($categories);*/
        /*return $this->render('category/index.html.twig', [
            'categories' => $categories ,
        ]);*/
        $datas=array();
        foreach ($categories as $key =>$cat){
            $datas[$key]['id'] = $cat->getId();
            $datas[$key]['nom_cat'] = $cat->getNomCat();
        }
        return new JsonResponse($datas);
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
