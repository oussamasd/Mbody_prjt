<?php

namespace App\Controller;

use Swift_Attachment;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//////
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;

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
     * @Route("/test1", name="test1")
     */
    public function index2(): Response
    {
        return $this->render('test/index2.html.twig');
    }
    /**
     * @Route("/test2", name="test2")
     */
    public function index3(): Response
    {
        return $this->render('test/rating.html.twig');
    }

    /**
     * @Route("/test3", name="test3")
     */
    public function index4(\Swift_Mailer $mailer): Response
    {

        $result = Builder::create()
            ->writer(new PngWriter())
            ->writerOptions([])
            ->data('hello ')

            ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
            ->size(300)
            ->margin(10)
            ->roundBlockSizeMode(new RoundBlockSizeModeMargin())

            ->labelText('code for participation')
            ->labelFont(new NotoSans(20))
            ->labelAlignment(new LabelAlignmentCenter())
            ->build();
        //echo $result->getDataUri();
        $img='qr.png';
        file_put_contents($img, file_get_contents($result->getDataUri()));
        $attachment = Swift_Attachment::fromPath($img);
        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('oussama.saddi2@gmail.com')
            ->setTo('oussama.saddi2@gmail.com')
            ->attach($attachment)
            ->setBody(
                $this->renderView(
                // templates/emails/registration.html.twig
                    'test/qr.html.twig',

                    ['i' => $img ,
                        'reslt'=>$result,
                        ]



                ),
                'text/html'

            )

            // you can remove the following code if you don't define a text version for your emails
          /*  ->addPart(
                $this->renderView(
                // templates/emails/registration.txt.twig

                ),
                'text/plain'
            )*/
        ;

        $mailer->send($message);






        return $this->render('test/qr.html.twig',[
            'i' => $img ,
                'reslt'=>$result,

        ]);
    }

}
