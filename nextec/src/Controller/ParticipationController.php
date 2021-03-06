<?php

namespace App\Controller;

use App\Entity\Formation;
use App\Entity\Participation;
use App\Entity\User;
use App\Form\ParticipationType;
use App\Form\SearchForm;
use App\Repository\FormationRepository;
use App\Repository\ParticipationRepository;
use App\Repository\UserRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Mukadi\ChartJSBundle\Chart\Builder;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;
use Twilio\Rest\Client;

/**
 * @Route("/participation")
 */
class ParticipationController extends AbstractController
{
    /**
     * @Route("/", name="participation_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $participations = $entityManager
            ->getRepository(Participation::class)
            ->findAll();

        return $this->render('participation/index.html.twig', [
            'participations' => $participations,
        ]);
    }


  /**
     * @Route("/participant/{idF}", name="partbyform", methods={"GET"})
     */
    public function partbyformation($idF,EntityManagerInterface $entityManager,ParticipationRepository $rep): Response
    {
        $participants = $rep
            ->partbyform($idF);

        return $this->render('participation/part.html.twig', [
            'participants' => $participants,
        ]);
    }


    /**
     * @Route("/new", name="participation_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $participation = new Participation();
        $form = $this->createForm(ParticipationType::class, $participation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($participation);
            $entityManager->flush();

            return $this->redirectToRoute('participation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('participation/new.html.twig', [
            'participation' => $participation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idParticipation}", name="participation_show", methods={"GET"})
     */
    public function show(Participation $participation): Response
    {
        return $this->render('participation/show.html.twig', [
            'participation' => $participation,
        ]);
    }

    /**
     * @Route("/{idParticipation}/edit", name="participation_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Participation $participation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ParticipationType::class, $participation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('participation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('participation/edit.html.twig', [
            'participation' => $participation,
            'form' => $form->createView(),
        ]);
    }
     

  

  
 

    /**
     * @Route("/{idParticipation}", name="participation_delete", methods={"POST"})
     */
    public function delete(Request $request, Participation $participation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$participation->getIdParticipation(), $request->request->get('_token'))) {
            $entityManager->remove($participation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('participation_index', [], Response::HTTP_SEE_OTHER);
    }
       /**
     * @Route("/list1/list", name="list1", methods={"GET"})
     */
    public function showFormations(FormationRepository $entityManager): Response
    {
     
        $list= $entityManager
       
        ->list();
        return $this->render('participation/listFormation.html.twig', [
            "list" => $list,
        ]);
    }
   
  /**
     * @Route("/participer/{id}/{idU}", name="participer1", methods={"GET","POST"})
     * @param Request $request
     * @param Client $twilioClient
     * @return Response
     * @throws \Twilio\Exceptions\TwilioException
     */
    public function participer($id,$idU, EntityManagerInterface $entityManager): Response
    {  
       $participation=new Participation();
        $f= $entityManager
        ->getRepository(Formation::class)
        ->find($id);
        $p= $entityManager
        ->getRepository(User::class)
        ->find($idU);
       
        $participation->setFormation($f);
        $participation->setIdParticipant($p);
        $participation->setDateParticipation(new DateTime());
       $msg= "Mr/MMe".$p->getUsername()."Vous ??tes particip?? ??" .$f->getNomFormation();
      if( $this->valid1($participation)==false)
       { $em = $this->getDoctrine()->getManager();
        $em->persist($participation);
        $em->flush();
      /*    $this->twilio->messages->create(
            "+21624030100", // Send text to this number
            array(
              'from' => '+14439032479', // My Twilio phone number
              'body' => 'Hello from Awesome Massages. A reminder that your massage appointment is for today at ' 
            )
          );
  
          $twilioClient->messages->create("", [
            "body" =>  "particip??",
            "from" => $p->getNumTel()
        ]);
    

       $p->messages->create("", [
            "body" => "particip??",
            "from" => $p->getNumTel()
        ]);*/

        $account_sid = 'AC4149cf8d417a217d698b9d9cb3355dae';
        $auth_token = 'eea540be9dee7ac8bdb4edb023803187';
        // In production, these should be environment variables. E.g.:
        // $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]
        
        // A Twilio number you own with SMS capabilities
        $twilio_number = "+19403146091";
        
        $client = new Client($account_sid, $auth_token);
       $client->messages->create(
            // Where to send a text message (your cell phone?)
            '+21629010200',
            array(
                'from' => '+19403146091',
                'body' => $msg
            )
        );

      
    }
        return $this->redirectToRoute('list1'); 
   
    
    
    }
         public function valid1($part):bool
         
         {

            $entityManager=$this->getDoctrine()
->getManager() ;
           $participations = $entityManager
            ->getRepository(Participation::class)
            ->findAll();
$x=false;
            foreach($participations as $p)
            {
if(($p->getIdParticipant()==$part->getIdParticipant()) && ( $p->getFormation()==$part->getFormation()))
   {$x=true;}
                
            }

            return $x;

         }
     /**
     * @Route("/list1/list", name="app_recherche3", methods={"POST"})
     */
    public function rechercher(Request $request,FormationRepository $repository)
    {
      
        if( $request->isMethod("POST"))
        {
            $nom =$request->get('forma');
            $formations =$repository->findEntities($nom);
        }

        return $this->render('participation/listFormation.html.twig', [
            'list' => $formations
        ]);}
          /**
     * @Route("/list1/EnLigne", name="enligne", methods={"GET"})
     */
    public function showFormationsOnLine(FormationRepository $entityManager): Response
    {
     
        $list= $entityManager
       
        ->listEN();

        return $this->render('participation/listFormationEN.html.twig', [
            "list" => $list,
        ]);
    }

 /**
     * @Route("/list1/PR", name="pr", methods={"GET"})
     */
    public function showFormationsPR(FormationRepository $entityManager): Response
    {
     
        $list= $entityManager
       
        ->listPR();

        return $this->render('participation/listFormationPR.html.twig', [
            "list" => $list,
        ]);
    }
}
