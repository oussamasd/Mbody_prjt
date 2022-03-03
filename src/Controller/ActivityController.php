<?php

namespace App\Controller;

use App\Entity\Activity;
use App\Entity\ImageActEx;
use App\Entity\Rating;
use App\Entity\User;
use App\Form\ActivityType;
use App\Form\PaticipeType;
use App\Repository\ActivityRepository;
use App\Repository\ExerciceRepository;
use DateInterval;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;
use function PHPSTORM_META\map;

class ActivityController extends AbstractController
{
    /**
     * @Route("/activity", name="activity")
     */
    public function index(Request $request , PaginatorInterface $paginator): Response
    {
        $data= $this->getDoctrine()->getRepository(Activity::class)->findAll();
       // var_dump($this->getUser());
        $activity= $paginator->paginate(
            $data,  //notre data
            $request->query->getInt('page',1), //numero de la page en cour : par defaut 1
            6 //nombre des elements
        );
//        $h=$activity[15]->getImages();
//        var_dump(sizeof($h));
        return $this->render('activity/Affichactivity.html.twig', [
            'activities' => $activity ,
            'date' =>date("Y-m-d")
        ]);
    }
    /**
     * @Route("/addActivity",name="activityAdd")
     */
    public function add(Request $request)
    {
        $activityAll= $this->getDoctrine()->getRepository(Activity::class)->findAll();

        $activity= new Activity();
        $form= $this->createForm(ActivityType::class,$activity);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            // On récupère les images transmises
            $images = $form->get('images')->getData();

            // On boucle sur les images
            foreach($images as $image){
                // On génère un nouveau nom de fichier
                $fichier = md5(uniqid()).'.'.$image->guessExtension();

                // On copie le fichier dans le dossier uploads
                $image->move(
                    $this->getParameter('images_directory'),
                    $fichier
                );

                // On crée l'image dans la base de données
                $img = new ImageActEx();
                $img->setImageUrl($fichier);
                $activity->addImage($img);
            $em= $this->getDoctrine()->getManager();
            $em->persist($activity);
            $em->flush();
            }
            return $this->redirectToRoute("activityAdd");
        }
        return $this->render("activity/add.html.twig",
            array("formActivity"=>$form->createView() , 'activities' => $activityAll ,));
    }
    /**
     * @Route("/updateActivite/{id}",name="ActivityUpdate")
     */
    public function updateActivite(ActivityRepository   $s,$id,Request $request)
    {
        $activityAll= $this->getDoctrine()->getRepository(Activity::class)->findAll();

        $activity= $s->find($id);
        //var_dump($student).die();
        $form= $this->createForm(ActivityType::class,$activity);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){

           /* $em= $this->getDoctrine()->getManager();
            $em->flush();*/
            // On récupère les images transmises
            $images = $form->get('images')->getData();

            // On boucle sur les images
            foreach($images as $image){
                // On génère un nouveau nom de fichier
                $fichier = md5(uniqid()).'.'.$image->guessExtension();

                // On copie le fichier dans le dossier uploads
                $image->move(
                    $this->getParameter('images_directory'),
                    $fichier
                );

                // On crée l'image dans la base de données
                $img = new ImageActEx();
                $img->setImageUrl($fichier);
                $activity->addImage($img);
                $em= $this->getDoctrine()->getManager();
                $em->flush();
            }
            return $this->redirectToRoute("activityAdd");
        }
        return $this->render("activity/add.html.twig", array("formActivity"=>$form->createView(),'activities' => $activityAll ,));
    }
    /**
     * @Route("/DeleteActivity/{id}",name="ActivityDelete")
     */
    public function delete($id){
        $activity= $this->getDoctrine()->getRepository(Activity::class)->find($id);
        $em= $this->getDoctrine()->getManager();
        $em->remove($activity);
        $em->flush();
        return $this->redirectToRoute("activityAdd");
    }
    /**
     * @Route("/activitySchedule", name="activitySchedule")
     */
    public function Schedule(): Response
    {

        $currentdate=date('D Y-m-d H:m:s');
        //$currentdate = date("D M j G:i:s T Y");
        $c='2022-02-20';
        //$currentdate|date('d');
        $em=$this->getDoctrine()->getRepository(Activity::class);
       /* $a=explode("-",$currentdate);
        $day=(integer)$a[2];
        $month=(integer)$a[1];
        $year=(integer)$a[0];
        if($day+6>30){
            if($month==12){
              $month+=1;
              $year+=1;
              $day=$day+6 - 30;

            }else{
                $month+=1;
                $day=$day+6 - 30;


            }


        }else{
            $day+=6;


        }
        if($day<10){

            $sDay="0".(string)$day;
        }else{
            $sDay=(string)$day;
        }
        if($month<10){

            $sMonth="0".(string)$month;
        }else{
            $sMonth=(string)$month;
        }
        $sYear=(string)$year;
        $nextDate=$sYear."-". $sMonth."-".$sDay;*/
        /*$Act = $em->findActiviteOfWeek($nextDate);*/
        //$datetime = $em->nextDate(1);
        $Act1 = $em->findActiviteOfWeek($em->nextDate(0));
        $Act2 = $em->findActiviteOfWeek($em->nextDate(1));
        $Act3 = $em->findActiviteOfWeek($em->nextDate(2));
        $Act4 = $em->findActiviteOfWeek($em->nextDate(3));
        $Act5 = $em->findActiviteOfWeek($em->nextDate(4));
        $Act6 = $em->findActiviteOfWeek($em->nextDate(5));
        $Act7 = $em->findActiviteOfWeek($em->nextDate(6));










        return $this->render('activity/schedule.html.twig',
             array(
                 'Act1'=>$Act1,
                 'Act2'=>$Act2,
                 'Act3'=>$Act3,
                 'Act4'=>$Act4,
                 'Act5'=>$Act5,
                 'Act6'=>$Act6,
                 'Act7'=>$Act7,
                 'Act1Date'=>$em->nextDate(0),
                 'Act2Date'=>$em->nextDate(1),
                 'Act3Date'=>$em->nextDate(2),
                 'Act4Date'=>$em->nextDate(3),
                 'Act5Date'=>$em->nextDate(4),
                 'Act6Date'=>$em->nextDate(5),
                 'Act7Date'=>$em->nextDate(6),
                 'sizeAct1'=>sizeof($Act1),
                 'sizeAct2'=>sizeof($Act2),
                 'sizeAct3'=>sizeof($Act3),
                 'sizeAct4'=>sizeof($Act4),
                 'sizeAct5'=>sizeof($Act5),
                 'sizeAct6'=>sizeof($Act6),
                 'sizeAct7'=>sizeof($Act7),

             ));
        //return $this->render('activity/test.html.twig',array('cu'=>$Act2));
    }
    /**
     * @Route("/activity/details/{id}", name="activityDetails" )
     */
    public function showmore($id , Request $request , Request $req): Response
    {


        $form= $this->createForm(PaticipeType::class);
        $form->handleRequest($request);
        $activity= $this->getDoctrine()->getRepository(Activity::class)->find($id);
        //user is the participation .... after integration change it to
        //$participant=$this->getUser();
        $participant = $this->getDoctrine()->getRepository(User::class)->find(2);
        $didRated = $this->getDoctrine()->getRepository(Rating::class)->findOneBy(array('Iduser'=>$participant ,'idActivity'=>$activity));
        $heRated=false;

        if($didRated !=null){
            $heRated=true;
        }
        var_dump($heRated);
        //pour teste user est  participé
        $particpe=false;
        foreach($activity->getParticipe() as $pp){
            if($pp==$participant){
                $particpe=true;
            }
        }


        if($form->isSubmitted()){

            $activity->addParticipe($participant);
            $em= $this->getDoctrine()->getManager();
            $em->flush();
        }
        var_dump((int)$req->request->get('rate'));
        $rate=(int)$req->request->get('rate');
        $rated = new Rating();
        if($rate!=0 and $rate != null){
            $rated->setIduser($participant);
            $rated->setIdactivity($activity);
            $rated->setRate($rate);
            $em=$this->getDoctrine()->getManager();
            $em->persist($rated);
            $em->flush();
        }


        return $this->render('activity/detailActivity.html.twig', [
            'activity' => $activity ,
            'btnParticipe' =>$form->createView(),
            'participe'=>$particpe,
            'userparticipated'=>sizeof($activity->getParticipe()),
            'heRated'=>$heRated,
            'didRated'=>$didRated
        ]);
    }
    /**
     * @Route("/activity/json/All", name="activityjson")
     */
    public function index2(): Response
    {
        $activity= $this->getDoctrine()->getRepository(Activity::class)->findAll();
//        $h=$activity[15]->getImages();
//        var_dump(sizeof($h));
        /*return $this->render('activity/Affichactivity.html.twig', [
            'activities' => $activity ,
        ]);*/
        $tb = array();
        $dt=array();
        foreach ($activity as $key =>$cat){
            $dt[$key]['id'] = $cat->getId();
            $dt[$key]['nom_Act'] = $cat->getNomAct();
            $dt[$key]['date_Act'] = $cat->getDateAct();
            $dt[$key]['temp_act'] = $cat->getTempAct();
            $dt[$key]['description_Act'] =$cat->getDescriptionAct();
            $dt[$key]['categoryId'] = $cat->getCategory()->getId();
            $dt[$key]['categoryNom'] =$cat->getCategory()->getNomCat();
            $dt[$key]['exercices'] = $cat->getExercices();
           // $dt[$key]['images'] = $cat->getDureExercice();

        }
        return new JsonResponse($dt);
    }
    /**
     * @Route("/activity/test/test", name="activitytest")
     */
    public function index3(Request $request , PaginatorInterface $paginator): Response
    {

        return $this->render('activity/testt.html.twig');
    }

}
