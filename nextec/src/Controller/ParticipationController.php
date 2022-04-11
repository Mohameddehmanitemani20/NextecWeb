<?php

namespace App\Controller;

use App\Entity\Formation;
use App\Entity\Participation;
use App\Entity\User;
use App\Form\ParticipationType;
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
       
      if( $this->valid1($participation)==false)
       { $em = $this->getDoctrine()->getManager();
        $em->persist($participation);
        $em->flush();

    

      /*  $p->messages->create("", [
            "body" => "participé",
            "from" => $p->getNumTel()
        ]);*/
      
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

}
