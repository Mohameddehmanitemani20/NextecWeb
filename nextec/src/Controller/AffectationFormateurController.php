<?php

namespace App\Controller;

use App\Entity\AffectationFormateur;
use App\Entity\User;
use App\Form\AffectationFormateurType;
use App\Repository\AffectationFormateurRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/affectation/formateur")
 */
class AffectationFormateurController extends AbstractController
{
    /**
     * @Route("/", name="affectation_formateur_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $affectationFormateurs = $entityManager
            ->getRepository(AffectationFormateur::class)
            ->findAll();

        return $this->render('affectation_formateur/index.html.twig', [
            'affectation_formateurs' => $affectationFormateurs,
        ]);
    }

    /**
     * @Route("/new", name="affectation_formateur_new", methods={"GET", "POST"})
     */
    public function new(\Swift_Mailer $mailer,Request $request, EntityManagerInterface $entityManager): Response
    {
        $affectationFormateur = new AffectationFormateur();
        $form = $this->createForm(AffectationFormateurType::class, $affectationFormateur);
        $data = $form->getData();
        //$affectationFormateur->setFormateur( $this->getUser());
       // $affectationFormateur->setFormation($data->get)
        $form->handleRequest($request);
     

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($affectationFormateur);
            $entityManager->flush();
            $user =
            $message = (new \Swift_Message('Nouvelle Affecation'))
            // On attribue l'expéditeur
            ->setFrom('moatezoues123@gmail.com')
        
            // On attribue le destinataire
            ->setTo( $affectationFormateur->getFormateur()->getEmail())
        
            // On crée le texte avec la vue
            ->setBody(
                $this->render('affectation_formateur/aff.html.twig', [
                    'aff' => $affectationFormateur,
                    'fin' => $affectationFormateur->getFormation()->getDateFin()->format( 'd/m/Y'),
                    'debut' => $affectationFormateur->getFormation()->getDateDebut()->format( 'd/m/Y'),
                   
        
                ]),
                'text/html'
            )
        ;
        $mailer->send($message);
        $this->addFlash('message', 'Votre message a été transmis, nous vous répondrons dans les meilleurs délais.'); // Permet un message flash de renvoi
     
            return $this->redirectToRoute('affectation_formateur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('affectation_formateur/new.html.twig', [
            'affectation_formateur' => $affectationFormateur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idAffectation}", name="affectation_formateur_show", methods={"GET"})
     */
    public function show(AffectationFormateur $affectationFormateur): Response
    {
        return $this->render('affectation_formateur/show.html.twig', [
            'affectation_formateur' => $affectationFormateur,
        ]);
    }

    /**
     * @Route("/{idAffectation}/edit", name="affectation_formateur_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, AffectationFormateur $affectationFormateur, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AffectationFormateurType::class, $affectationFormateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('affectation_formateur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('affectation_formateur/edit.html.twig', [
            'affectation_formateur' => $affectationFormateur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idAffectation}", name="affectation_formateur_delete", methods={"POST"})
     */
    public function delete(Request $request, AffectationFormateur $affectationFormateur, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$affectationFormateur->getIdAffectation(), $request->request->get('_token'))) {
            $entityManager->remove($affectationFormateur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('affectation_formateur_index', [], Response::HTTP_SEE_OTHER);
    }


/**
     * @Route("/affect/Formateur/", name="affectForm", methods={"GET"})
     */
    public function affectForm(AffectationFormateurRepository $a,UserRepository $u): Response
    {$username="formateur1";
       //  $user=new User() ;
         //$user=$u->findbyusername($username);
        // $x=$user->getId();
        $affectationFormateurs = $a->AffectationForm($username);

        return $this->render('affectation_formateur/affectForm.html.twig', [
            'affectation_formateurs' => $affectationFormateurs,
        ]);
    }
    /**
     * @Route("/accepter/{idAffectation}", name="accepter", methods={"GET","POST"})
     */
    public function accepter($idAffectation, AffectationFormateurRepository $entityManager): Response
    {
      
        $f= $entityManager
       
        ->accepter($idAffectation);
       
        return $this->redirectToRoute('affectForm');    }



           /**
     * @Route("/refuser/{idAffectation}", name="refuser", methods={"GET","POST"})
     */
    public function refuser($idAffectation, AffectationFormateurRepository $entityManager): Response
    {
      
        $f= $entityManager
      
        ->refuser($idAffectation);
       
        return $this->redirectToRoute('affectForm');    }
}
