<?php

namespace App\Controller;

use App\Entity\Entreneur;
use App\Form\EntreneurType;
use App\Repository\EntreneurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/entreneur")
 */


class EntreneurController extends AbstractController
{
    /**
     * @Route("/", name="entreneur_index", methods={"GET"})
     */
    public function index(EntreneurRepository $entreneurRepository): Response
    {
        return $this->render('entreneur/index.html.twig', [
            'entreneurs' => $entreneurRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="entreneur_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $entreneur = new Entreneur();
        $form = $this->createForm(EntreneurType::class, $entreneur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($entreneur);
            $entityManager->flush();

            return $this->redirectToRoute('entreneur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('entreneur/new.html.twig', [
            'entreneur' => $entreneur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="entreneur_show", methods={"GET"})
     */
    public function show(Entreneur $entreneur): Response
    {
        return $this->render('entreneur/show.html.twig', [
            'entreneur' => $entreneur,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="entreneur_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Entreneur $entreneur, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(EntreneurType::class, $entreneur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('entreneur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('entreneur/edit.html.twig', [
            'entreneur' => $entreneur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="entreneur_delete", methods={"POST"})
     */
    public function delete(Request $request, Entreneur $entreneur, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$entreneur->getId(), $request->request->get('_token'))) {
            $entityManager->remove($entreneur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('entreneur_index', [], Response::HTTP_SEE_OTHER);
    }
}
