<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use Swift_Mailer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/register", name="app_register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder,\Swift_Mailer $mailer): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);
        $user->setRoles(["ROLE_USER"]);
        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $form->get('password')->getData()
                )
            );
            $user->setActivationToken(md5(uniqid()));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email
            $message=(new \Swift_Message('activation de compte'))
                ->setFrom('iskander.KASMI@esprit.tn.com')
                ->setTo($user->getEmail())
                ->setBody(

                    $this->renderView('contact/activation.html.twig',['token'=>$user->getActivationToken()]
                    ),'text/html'

                );
            $mailer->send($message);
            return $this->redirectToRoute('test');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
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
     * @Route("/activation/{token}", name="activation")
     */
    public function activation($token, UserRepository $users)
    {

        $user = $users->findOneBy(['activation_token' => $token]);
        // Si aucun utilisateur n'est associé à ce token
        if(!$user){
            // On renvoie une erreur 404
            throw $this->createNotFoundException('Cet utilisateur n\'existe pas');
        }
        // On supprime le token
        $user->setActivationToken(null);
        $entityManager = $this->getDoctrine()->getManager();
        $user->setIsVerified(true);
        $entityManager->persist($user);
        $entityManager->flush();
        // On génère un message

        $this->addFlash('message', 'Utilisateur activé avec succès');
        // On retourne à l'accueil
        return $this->redirectToRoute('test');
    }
    /**
     * @Route("ajouterUserJ", name="ajouterUserJ")
     */
    public function SignupAction(Request $request, UserPasswordEncoderInterface $passwordEncoder,NormalizerInterface $Normalizer ){

        $password=$request->query->get('password');
        $email=$request->query->get('email');
        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            return new Response("email invalid");
        }
        $user=new User();
        //$user->setId($request->get('id'));
        $user->setCin($request->get('cin'));
        $user->setEmail($request->get('email'));
        $user->setPassword(
            $passwordEncoder->encodePassword(
                $user,
                $password
            )
        );
        $user->setNom($request->get('nom'));
        $user->setPrenom($request->get('prenom'));
        $user->setAdresse($request->get('adresse'));
        $user->setNumero($request->get('numero'));
        try {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return new JsonResponse("Account is created ",200);
        }catch (\Exception $ex ){
            return  new Response("exception".$ex->getMessage());
        }
//         $jsonContent=$Normalizer->normalize($user,'json',['groups'=>'post:read']);
//        return new Response(json_encode($jsonContent));

    }
    /**
     * @Route("Signin", name="signin")
     */

    public function signinAction (Request $request,NormalizerInterface $normalizer){

        $email =$request->query->get('email');
        $password=$request->query->get('password');
        $em=$this->getDoctrine()->getManager();
        $user=$em->getRepository(user::class)->findOneBy(['email'=>$email]);

        if ($user)
        {
            if (password_verify($password,$user->getPassword())){

                //$seralizer= new Serializer([new ObjectNormalizer()]);
                $formatted=$normalizer->normalize($user,'json',['groups'=>'post:read']);
                return new JsonResponse($formatted);
            }
            else{
                return new Response("password not found ");
            }
        }
        else{
            return new Response("failed ");
        }


    }

    /**
     * @Route("user/getPasswordByEmail", name="app_password")
     */

    public function getPassswordByEmail(Request $request) {

        $email = $request->get('email');
        $user = $this->getDoctrine()->getManager()->getRepository(User::class)->findOneBy(['email'=>$email]);
        if($user) {
            $password = $user->getPassword();
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize($password);
            return new JsonResponse($formatted);
        }
        return new Response("user not found");



    }





}

