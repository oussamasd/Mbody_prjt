<?php

namespace App\Controller;

use App\Entity\TypeReclamation;
use App\Form\TypeReclamationType;
use App\Repository\TypeReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/type/reclamation")
 */
class TypeReclamationController extends AbstractController
{
    /**
     * @Route("/back", name="type_reclamation_index", methods={"GET"})
     */
    public function index(TypeReclamationRepository $typeReclamationRepository): Response
    {
        return $this->render('type_reclamation/index.html.twig', [
            'type_reclamations' => $typeReclamationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/orderby", name="OrderByRecc")
     */
    public function listt(Request $request)
    {
        $Reclamations=$this->getDoctrine()->getRepository(TypeReclamation::class)->findAll();
        $reclamationByEmail=$this->getDoctrine()->getRepository(TypeReclamation::class)->orderByMail();
        return $this->render("type_reclamation/orderby.html.twig",
            array("type_reclamationss"=>$Reclamations,"type_reclamations"=>$reclamationByEmail));
    }

    /**
     * @Route("/reclamation2", name="type_reclamation_index2", methods={"GET"})
     */
    public function index2(TypeReclamationRepository $typeReclamationRepository): Response
    {
        return $this->render('type_reclamation/index2.html.twig', [
            'type_reclamations' => $typeReclamationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/front", name="type_reclamation_index3", methods={"GET"})
     */
    public function index3(TypeReclamationRepository $typeReclamationRepository): Response
    {
        return $this->render('type_reclamation/front.html.twig', [
            'type_reclamations' => $typeReclamationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="type_reclamation_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager,\Swift_Mailer $mailer): Response
    {
        $typeReclamation = new TypeReclamation();
        $form = $this->createForm(TypeReclamationType::class, $typeReclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($typeReclamation);
            $entityManager->flush();
            $username = 'ilyes.nakhlii188@gmail.com';
            // On crée le message
            $message = (new \Swift_Message('on a ajouter une nouvelle type reclamation'))
                // On attribue l'expéditeur
                ->setFrom($username)
                ->setTo($username)
                ->setBody('Une Nouvelle Type Reclamation est ajouté de Type :');
            $mailer->send($message);
            return $this->redirectToRoute('type_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('type_reclamation/new.html.twig', [
            'type_reclamation' => $typeReclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="type_reclamation_show", methods={"GET"})
     */
    public function show(TypeReclamation $typeReclamation): Response
    {
        return $this->render('type_reclamation/show.html.twig', [
            'type_reclamation' => $typeReclamation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="type_reclamation_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, TypeReclamation $typeReclamation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TypeReclamationType::class, $typeReclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('type_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('type_reclamation/edit.html.twig', [
            'type_reclamation' => $typeReclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="type_reclamation_delete", methods={"POST"})
     */
    public function delete(Request $request, TypeReclamation $typeReclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$typeReclamation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($typeReclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('type_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }
}
