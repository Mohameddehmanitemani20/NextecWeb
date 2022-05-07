<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Form\AvisType;
use App\Repository\AvisRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/avis")
 */
class AvisController extends AbstractController
{
    /**
     * @Route("/", name="app_avis_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager, AvisRepository $avisRepository): Response
    {
        
           return $this->render('avis/index.html.twig', [
            'avis' => $avisRepository->findAll(),

            
        ]);
    }
    


      /**
     * @Route("/stats",name="stats")
     */
    public function statistique(AvisRepository $AvisRepository,EntityManagerInterface $entityManager)
    {
        $avis = $entityManager
        ->getRepository(Avis::class)
        ->findAll();
        $note= [];
       
        foreach($avis as $avis){
            $note[]=$avis->getNote();
            
        }
    
        //$note= [];
    //     $list=[];
    //   $nb1=0; $nb2=0; $nb3=0; $nb4=0; $nb5=0;
    //   $list[0]=0;    

    //   $list[1]=0;    
    //   $list[2]=0;    
    //   $list[3]=0;    
    //   $list[4]=0;  
    //     foreach($avis as $a){
           

    //         if($a->getNote()==1); 
    //         {++$list[0];
             
             
    //             // var_dump($a->getNote()==1);
    //         }
         
    //          if($a->getNote()==2);
    //          { ++$list[1];}
    //          if($a->getNote()==3);
    //        { ++$list[2];}
    //          if($a->getNote()==4);
    //          { ++$list[3];}
    //          if($a->getNote()==5);
    //          { ++$list[4];}
           
          
    //     }
        // $list[0]=$nb1;    

        // $list[1]=$nb2;    
        // $list[2]=$nb3;    
        // $list[3]=$nb4;    
        // $list[4]=$nb5;    
        // // var_dump($list);
        return $this->render('avis/stats.html.twig',[
            'note' =>json_encode($note),
        
        ]);
    }

    /**
     * @Route("/new", name="app_avis_new", methods={"GET", "POST"})
     */
    public function new(Request $request, AvisRepository $avisRepository): Response
    {
        $avi = new Avis();
        $form = $this->createForm(AvisType::class, $avi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $avisRepository->add($avi);
            return $this->redirectToRoute('app_avis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('avis/new.html.twig', [
            'avi' => $avi,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idAvis}", name="app_avis_show", methods={"GET"})
     */
    public function show(Avis $avi): Response
    {
        return $this->render('avis/show.html.twig', [
            'avi' => $avi,
        ]);
    }

    /**
     * @Route("/{idAvis}/edit", name="app_avis_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Avis $avi, AvisRepository $avisRepository): Response
    {
        $form = $this->createForm(AvisType::class, $avi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $avisRepository->add($avi);
            return $this->redirectToRoute('app_avis_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('avis/edit.html.twig', [
            'avi' => $avi,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idAvis}", name="app_avis_delete", methods={"POST"})
     */
    public function delete(Request $request, Avis $avi, AvisRepository $avisRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$avi->getIdAvis(), $request->request->get('_token'))) {
            $avisRepository->remove($avi);
        }

        return $this->redirectToRoute('app_avis_index', [], Response::HTTP_SEE_OTHER);
    }
  

}
