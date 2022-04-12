<?php

namespace App\Controller;

use App\Entity\Journe;
use App\Form\JourneType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/journe")
 */
class JourneController extends AbstractController
{
    /**
     * @Route("/", name="app_journe_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $journes = $entityManager
            ->getRepository(Journe::class)
            ->findAll();

        return $this->render('journe/index.html.twig', [
            'journes' => $journes,
        ]);
    }

    /**
     * @Route("/new", name="app_journe_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $journe = new Journe();
        $form = $this->createForm(JourneType::class, $journe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($journe);
            $entityManager->flush();

            return $this->redirectToRoute('app_journe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('journe/new.html.twig', [
            'journe' => $journe,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idJourne}", name="app_journe_show", methods={"GET"})
     */
    public function show(Journe $journe): Response
    {
        return $this->render('journe/show.html.twig', [
            'journe' => $journe,
        ]);
    }

    /**
     * @Route("/{idJourne}/edit", name="app_journe_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Journe $journe, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(JourneType::class, $journe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_journe_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('journe/edit.html.twig', [
            'journe' => $journe,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idJourne}", name="app_journe_delete", methods={"POST"})
     */
    public function delete(Request $request, Journe $journe, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$journe->getIdJourne(), $request->request->get('_token'))) {
            $entityManager->remove($journe);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_journe_index', [], Response::HTTP_SEE_OTHER);
    }
}
