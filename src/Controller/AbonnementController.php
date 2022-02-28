<?php

namespace App\Controller;

use App\Entity\Abonnement;

use App\Entity\Offre;
use App\Form\AbonnementType;
use App\Repository\AbonnementRepository;
use App\Repository\OffreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Gedmo\Sluggable\Util\Urlizer;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Knp\Component\Pager\PaginatorInterface ;
use Symfony\Component\Form\FormBuilderInterface;
use App\Controller\NormalizerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;


/**
 * @Route("/abonnement")
 */
class AbonnementController extends AbstractController
{
    /**
     * @Route("/", name="abonnement_index", methods={"GET"})
     *  @param Request $request
     * @param PaginatorInterface $paginator
     * @return Response
     */

    public function index(AbonnementRepository $abonnementRepository,OffreRepository $offrerep): Response
    {

        return $this->render('abonnement/index.html.twig', [
            'abonnements' => $abonnementRepository->findAll(),
            'offres' => $offrerep->findAll(),

        ]);
    }

    /**
     * @Route("/new", name="abonnement_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $abonnement = new Abonnement();
        $form = $this->createForm(AbonnementType::class, $abonnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->isSubmitted() && $form->isValid()) {
                /** @var UploadedFile $uploadedFile */
                $uploadedFile = $form['imageFile']->getData();
                $destination = $this->getParameter('kernel.project_dir') . '/public/uploads';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = Urlizer::urlize($originalFilename) . '-' . uniqid() . '.' . $uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );
                $abonnement->setPhoto($newFilename);
                $entityManager->persist($abonnement);
                $entityManager->flush();


                return $this->redirectToRoute('ck', [], Response::HTTP_SEE_OTHER);
            }
        }

        return $this->render('abonnement/new.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="abonnement_show", methods={"GET"})
     */
    public function show(Abonnement $abonnement): Response

    {

        return $this->render('abonnement/show.html.twig', [
            'abonnement' => $abonnement,

        ]);

    }

    /**
     * @Route("/{id}/edit", name="abonnement_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Abonnement $abonnement, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AbonnementType::class, $abonnement);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['imageFile']->getData();
            $destination = $this->getParameter('kernel.project_dir') . '/public/uploads';
            $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
            $newFilename = Urlizer::urlize($originalFilename) . '-' . uniqid() . '.' . $uploadedFile->guessExtension();
            $uploadedFile->move(
                $destination,
                $newFilename
            );
            $abonnement->setPhoto($newFilename);
            $entityManager->persist($abonnement);
            $entityManager->flush();

            return $this->redirectToRoute('ck', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('abonnement/edit.html.twig', [
            'abonnement' => $abonnement,
            'form' => $form->createView(),

        ]);
    }

    /**
     * @Route("/{id}", name="abonnement_delete", methods={"POST"})
     */
    public function delete(Request $request, Abonnement $abonnement, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $abonnement->getId(), $request->request->get('_token'))) {
            $entityManager->remove($abonnement);
            $entityManager->flush();
        }

        return $this->redirectToRoute('ck', [], Response::HTTP_SEE_OTHER);
    }

    /**
     * @Route("/abon/back", name="ck", methods={"GET"})
     */
    public function afficher(AbonnementRepository $abonnementRepository): Response
    {
        return $this->render('abonnement/indexback.html.twig', [
            'abonnements' => $abonnementRepository->findAll(),
        ]);
    }

    /**
     * @Route("/frontabon", name="abonnement_front", methods={"GET"})
     */
    public function index1(AbonnementRepository $abonnementRepository): Response
    {
        return $this->render('abonnement/indexback.html.twig', [
            'abonnements' => $abonnementRepository->findAll(),
        ]);
    }

    public function Liste(AbonnementRepository $abonnementRepository,Abonnement $abonnement){
        $repository=$this->getDoctrine()->getRepository(Abonnement::class);
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $abonnement=$repository->findAll();


        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('article/liste.html.twig',
            ['abonnement'=>$abonnement]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("Liste_des_articles.pdf", [
            "Attachment" => true
        ]);


    }
    /**
     * @Route("/mobile/json/abonnement", name="abonnement_index10")

     */

    public function index10(AbonnementRepository $abonnementRepository, OffreRepository $offrerep): Response
    {
        $activity= $this->getDoctrine()->getRepository(Abonnement::class)->findAll();
        $dt=array();
        foreach ($activity as $key =>$cat){
            $dt[$key]['id'] = $cat->getId();
            $dt[$key]['nom'] = $cat->getNom();
            $dt[$key]['prix'] = $cat->getPrix();
            $dt[$key]['categories'] = $cat->getCategories();
            $dt[$key]['Description'] =$cat->getDescription();
            $dt[$key]['photo'] = $cat->getPhoto();

            // $dt[$key]['images'] = $cat->getDureExercice();

        }
        return new JsonResponse($dt);

    }
    /**
     * @Route("/abon/back", name="sortname")
     */
    public function triname(Abonnement $abonnement): Response{
        $abonnement = $this->getDoctrine()->getRepository(Abonnement::class)->sortName();
        return $this->render('abonnement/indexback.html.twig', [
            'controller_name' => 'AbonnementController',
            'namesorted' => $abonnement,
        ]);
    }

}
