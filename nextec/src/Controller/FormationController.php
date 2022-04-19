<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\Formation;
use App\Entity\Search;
use App\Form\FormationType;
use App\Form\SearchForm;
use App\Form\TriForm;
use App\Repository\FormationRepository;
use App\Repository\ParticipationRepository;
use ContainerF8itYSJ\PaginatorInterface_82dac15;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/formation")
 */
class FormationController extends AbstractController
{
    /**
     * @Route("/", name="formation_index", methods={"GET"})
     */
    public function index(FormationRepository $repository,PaginatorInterface  $paginator,EntityManagerInterface $entityManager,Request $request): Response
    {
      
        
        $form=$this->createForm(SearchForm::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())

{
    $min = $form['min']->getData();
    $max = $form['max']->getData();
    $formations=$repository->findSearch( $min, $max);
}
        else
       {$formations = $entityManager
            ->getRepository(Formation::class)
            ->findAll();}



          //  if ($form1->isSubmitted())
            //{ $formations = $repository
              //  ->tri();}
            // $formations=     $paginator->paginate(
            //     $donnees, // Requête contenant les données à paginer (ici nos articles)
            //     $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            //     3 // Nombre de résultats par page
            // );
        return $this->render('formation/index.html.twig', [
            'formations' => $formations,'form'=>$form->createView()
        ]);
    }


  /**
     * @Route("/listF", name="listF", methods={"GET"})
     */
    public function index1(EntityManagerInterface $entityManager): Response
    {
        $formations = $entityManager
            ->getRepository(Formation::class)
            ->findAll();

        return $this->render('participation/listF.html.twig', [
            'formations' => $formations,
        ]);
    }
 /**
     * @Route("/filtrer", name="filtrerD")
      */
      public function filtrer(FormationRepository $repository, Request $request)
      {
   
        $form=$this->createForm(SearchForm::class);
     
        $form->handleRequest($request);
        $min = $form['min']->getData();
        $max = $form['max']->getData();
        $formations=$repository->findSearch(new \DateTime('2000-11-02'), new \DateTime('2020-11-02 00:00:00'));
         
        return $this->render('formation/listWithSearch.html.twig', [
            'formations' => $formations
        ]);
        }
 /**
     * @Route("/trier", name="trierD")
      */
      public function trierF(FormationRepository $repository, Request $request)
      {
        $form=$this->createForm(SearchForm::class);
      
        $formations=$repository->tri();
         
        return $this->render('formation/index.html.twig', [
            'formations' => $formations,'form'=>$form->createView()
        ]);
        }


    /**
     * @Route("/new", name="formation_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $formation = new Formation();
        $form = $this->createForm(FormationType::class, $formation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($formation);
            $entityManager->flush();

            return $this->redirectToRoute('formation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('formation/new.html.twig', [
            'formation' => $formation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idFormation}", name="formation_show", methods={"GET"})
     */
    public function show(Formation $formation): Response
    {
        return $this->render('formation/show.html.twig', [
            'formation' => $formation,
        ]);
    }

    /**
     * @Route("/{nomFormation}", name="formation_showbynom")
     */
    public function showByNom(FormationRepository  $em, $nomFormation)
    {
        $f=$em->FormationByNom($nomFormation);
        return $this->render('formation/showbynom.html.twig', [
            'formation' => $f,
        ]);
    }
    /**
     * @Route("/{idFormation}/edit", name="formation_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Formation $formation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(FormationType::class, $formation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('formation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('formation/edit.html.twig', [
            'formation' => $formation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idFormation}", name="formation_delete", methods={"POST"})
     */
    public function delete(Request $request, Formation $formation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$formation->getIdFormation(), $request->request->get('_token'))) {
            $entityManager->remove($formation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('formation_index', [], Response::HTTP_SEE_OTHER);
    }

/**
     * @Route("/pdf/{id}", name="Formation_showpdf", methods={"GET"})
     */
    public function pdfshow(Formation $f)
    {  $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($pdfOptions);
       $img='data:image;base64,'.base64_encode(@file_get_contents('C:\Users\pc\OneDrive\Pictures\logo.jpeg'));
     
        $html=$this->render('formation/pdfshow.html.twig', [
            'Formation' => $f,
            'date Début' => $f->getDateDebut()->format( 'd/m/Y'),
            'date Fin' => $f->getDateFin()->format( 'd/m/Y'),
            'Programme' => $f->getProgramme(),
            'img1' =>  $img

            
        ]);
        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);
    }
/**
     * @Route("/search", name="ajax_search", methods={"GET"})
     */
    public function searchAction(FormationRepository $repository,Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
    
$posts=$repository->findEntities($requestString);
        if(!$posts) {
            $result['posts']['error'] = "Post Not found :( ";
        } 
        
        // else {
        //     $result['posts'] = $this->getRealEntities($posts);
        // }
        return new Response(json_encode($result));
    }
    // public function getRealEntities($posts){
    //     foreach ($posts as $post){
    //         $realEntities[$post->getIdFormation()] = $post;
    //     }
    //     return $realEntities;
    // }
/**
 * Search action.
 * @Route("/search1/{search}", name="search1")
 * @param  Request               $request Request instance
 * @param  string                $search  Search term
 * @return Response|JsonResponse          Response instance
 */
public function searchAction1(FormationRepository $repository,Request $request, string $search)
{
    if (!$request->isXmlHttpRequest()) {
        return $this->render("formation/index.html.twig");
    }

    if (!$searchTerm = trim($request->query->get("search", $search))) {
        return new JsonResponse(["error" => "Search term not specified."], Response::HTTP_BAD_REQUEST);
    }

    $em = $this->getDoctrine()->getManager();
    if (!($results =$repository->findEntities($search))) {
        return new JsonResponse(["error" => "No results found."], Response::HTTP_NOT_FOUND);
    }

    return new JsonResponse([
        "html" => $this->renderView("search.ajax.twig", ["results" => $results]),
    ]);
}



 
/**
     * @Route("/best/best", name="best", methods={"GET"})
     */
    public function best(PaginatorInterface  $paginator,ParticipationRepository $p ,Request $request)
    {
       
       $s=$p->nbPartByForm1();
       $formations=     $paginator->paginate(
          $s, // Requête contenant les données à paginer 
           $request->query->getInt('page', 1), 
           3 
       );
    
return $this->render('formation/best.html.twig', [
    'formations' => $formations
]);

        
        
    }


    /**
     * @Route("/", name="app_recherche", methods={"POST"})
     */
    public function rechercher(Request $request,FormationRepository $repository)
    {
        $form=$this->createForm(SearchForm::class);
        if( $request->isMethod("POST"))
        {
            $nom =$request->get('marque');
            $formations =$repository->findEntities($nom);
        }

        return $this->render('formation/index.html.twig', [
            'formations' => $formations,'form'=>$form->createView()
        ]);}

}
