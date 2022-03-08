<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use PHPUnit\Util\Json;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Dompdf\Dompdf;
use Dompdf\Options;
/**
 * @Route("/reclamation")
 */
class ReclamationController extends AbstractController
{
    /**
     * @Route("/", name="reclamation_index", methods={"GET"})
     */
    public function index(Request $request,PaginatorInterface $paginator): Response
    {
        $donnees = $this->getDoctrine()->getRepository(Reclamation::class)->findAll();
        $donnees = $paginator->paginate(
            $donnees,
            $request->query->getInt('page', 1),
            2
        );
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $donnees,
        ]);
    }
    /**
     * @Route("/orderby", name="OrderByRec")
     */
    public function listt(Request $request)
    {
        $Reclamations=$this->getDoctrine()->getRepository(Reclamation::class)->findAll();
        $reclamationByEmail=$this->getDoctrine()->getRepository(Reclamation::class)->orderByMail();
        return $this->render("reclamation/orderby.html.twig",
            array("reclamationss"=>$Reclamations,"reclamations"=>$reclamationByEmail));
    }

    /**
     * @Route("/afficher_reclamation", name="reclamation_index2", methods={"GET"})
     */
    public function index2(ReclamationRepository $reclamationRepository,PaginatorInterface $paginator,Request $request): Response
    {
        $donnees = $this->getDoctrine()->getRepository(Reclamation::class)->findAll();
        $donnees = $paginator->paginate(
            $donnees,
            $request->query->getInt('page', 1),
            2
        );
        return $this->render('reclamation/afficher_reclamation.html.twig', [
            'reclamations' => $donnees,
        ]);
    }
    /**
     * @Route("/listp", name="reclamation_listp", methods={"GET"})
     */
    public function listp(ReclamationRepository $reclamationRepository):Response
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $reclamations = $reclamationRepository->findAll();


        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('reclamation/listp.html.twig', [
            'reclamations' => $reclamations,
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);
    }



    /**
     * @Route("/new", name="reclamation_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager,MailerInterface $mailer): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reclamation);
            $entityManager->flush();
            $email = (new Email())
                ->from($reclamation->getNom().gettext('@esprit.tn'))
                ->to('ilyes.nakhli@esprit.tn')
                //->cc('cc@example.com')
                //->bcc('bcc@example.com')
                //->replyTo('fabien@example.com')
                //->priority(Email::PRIORITY_HIGH)
                ->subject($reclamation->getNom().gettext(' Has added a new Reclamation !'))
                ->text('Sending emails is fun again!')
                ->html($reclamation->getDescription().gettext(''));

            $mailer->send($email);
            return $this->redirectToRoute('reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reclamation_show", methods={"GET"})
     */
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reclamation_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reclamation_delete", methods={"POST"})
     */
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reclamation_index', [], Response::HTTP_SEE_OTHER);
    }


    /**
     * @Route("/rec/json/all", name="reclamation_json", methods={"GET"})
     */
    public function jsonn(ReclamationRepository $reclamationRepository): Response
    {
       $rec = $reclamationRepository->findAll();
       $dt=array();
       foreach ($rec as $key =>$cat){
           $dt[$key]['id'] = $cat->getId();
           $dt[$key]['nom'] = $cat->getNom();
           $dt[$key]['description'] = $cat->getDescription();
       }
       return new JsonResponse($dt);
    }


}
