<?php

namespace App\Controller;


use App\Entity\User;
use App\Form\ContactType;
use App\Form\SearchUserType;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;


class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    /**
     * @Route("/admin", name="admin")
     */
    public function admin(Request $request)
    {


        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        $formSearch= $this->createForm(SearchUserType::class);
        $formSearch->handleRequest($request);
        if($formSearch->isSubmitted()){
            $cin= $formSearch->getData()->getCin();
            $result= $this->getDoctrine()->getRepository(User::class)->searchUser($cin);
            return $this->render("admin/index.html.twig",["users"=>$result, 'formSearch'=>$formSearch->createView()]);
        }

        return $this->render('admin/index.html.twig', [
            'users' => $users,
            'formSearch'=>$formSearch->createView(),


        ]);
    }
    /**
     * @Route("/admin/{id}", name="supprimerU")
     */
    public function supprimer($id)
    {
        $user= $this->getDoctrine()->getRepository(User::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();
        return $this->redirectToRoute('admin');
    }

    /**
     * @Route("/admin/modifier/{id}", name="modifierU")
     */
    public function editUser(User $user, Request $request)
    {
      $form = $this->createForm(UserType::class, $user);
        $form->add('Modifier',SubmitType::class) ;
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('message', 'Utilisateur modifié avec succès');
            return $this->redirectToRoute('admin');
        }

        return $this->render('admin/edituser.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/contact/{id}", name="contact")
     */
    public function email(Request $request, $id, MailerInterface $mailer)
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        $user=$this->getDoctrine()->getRepository(User::class)->find($id);
        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();

            $email = (new Email())
                // On attribue l'expéditeur
                ->From($user->getEmail())
                // On attribue le destinataire
                ->To($contact['email'])
                // On crée le texte avec la vue
                ->text(
                    $this->renderView(
                        'contact/email.html.twig',compact('contact','user')),
                    'text/html')
            ;
            $mailer->send($email);
            $this->addFlash('message', 'Votre message a été transmis, nous vous répondrons dans les meilleurs délais.'); // Permet un message flash de renvoi
            return $this->redirectToRoute('admin');

        }
        return $this->render('contact/index.html.twig',['contactForm' => $form->createView()]);
    }

    /**
     * @Route("/adminJson", name="admin_Json")
     */
    public function afficherJson(Request $request, NormalizerInterface $normalizer)
    {
        $users=$this->getDoctrine()->getRepository(User::class)->findAll();
        $jsonContent=$normalizer->normalize($users,'json',['groups'=>'post:read']);

        //$produits=$this->getDoctrine()->getRepository(Produit::class)->findAll();
        return new Response(json_encode($jsonContent));

    }


    /**
     * @Route("/supprimerUserJson/{id}", name="supprimerUs_Json")
     */
    public function supprimerJson($id ,NormalizerInterface $normalizer)
    {
        $user=$this->getDoctrine()->getRepository(User::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();
        $jsonContent=$normalizer->normalize($user,'json',['groups'=>'post:read']);


        return new Response(json_encode($jsonContent));

    }


}

