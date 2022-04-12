<?php

namespace App\Controller;

use App\Entity\Billets;
use App\Form\BilletsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/billets")
 */
class BilletsController extends AbstractController
{
    /**
     * @Route("/", name="app_billets_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $billets = $entityManager
            ->getRepository(Billets::class)
            ->findAll();

        return $this->render('billets/index.html.twig', [
            'billets' => $billets,
        ]);
    }

    /**
     * @Route("/new", name="app_billets_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $billet = new Billets();
        $form = $this->createForm(BilletsType::class, $billet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($billet);
            $entityManager->flush();

            return $this->redirectToRoute('app_billets_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('billets/new.html.twig', [
            'billet' => $billet,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idBillet}", name="app_billets_show", methods={"GET"})
     */
    public function show(Billets $billet): Response
    {
        return $this->render('billets/show.html.twig', [
            'billet' => $billet,
        ]);
    }

    /**
     * @Route("/{idBillet}/edit", name="app_billets_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Billets $billet, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BilletsType::class, $billet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_billets_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('billets/edit.html.twig', [
            'billet' => $billet,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idBillet}", name="app_billets_delete", methods={"POST"})
     */
    public function delete(Request $request, Billets $billet, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$billet->getIdBillet(), $request->request->get('_token'))) {
            $entityManager->remove($billet);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_billets_index', [], Response::HTTP_SEE_OTHER);
    }
}
