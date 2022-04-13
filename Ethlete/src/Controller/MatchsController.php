<?php

namespace App\Controller;

use App\Entity\Matchs;
use App\Form\MatchsType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/matchs")
 */
class MatchsController extends AbstractController
{
    /**
     * @Route("/", name="app_matchs_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $matchs = $entityManager
            ->getRepository(Matchs::class)
            ->findAll();

        return $this->render('matchs/index.html.twig', [
            'matchs' => $matchs,
        ]);
    }
    /**
     * @Route("/aa", name="app_matchs_userindex", methods={"GET"})
     */
    public function userindex(EntityManagerInterface $entityManager): Response
    {
        $matchs = $entityManager
            ->getRepository(Matchs::class)
            ->findAll();

        return $this->render('matchs/userindex.html.twig', [
            'matchs' => $matchs,
        ]);
    }
    /**
     * @Route("/new", name="app_matchs_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $match = new Matchs();
        $form = $this->createForm(MatchsType::class, $match);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($match);
            $entityManager->flush();

            return $this->redirectToRoute('app_matchs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('matchs/new.html.twig', [
            'match' => $match,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idMatch}", name="app_matchs_show", methods={"GET"})
     */
    public function show(Matchs $match): Response
    {
        return $this->render('matchs/show.html.twig', [
            'match' => $match,
        ]);
    }
    /**
     * @Route("/affiche/{idMatch}", name="app_matchs_showf", methods={"GET"})
     */
    public function showf(Matchs $match): Response
    {
        return $this->render('matchs/usershow.html.twig', [
            'match' => $match,
        ]);
    }

    /**
     * @Route("/{idMatch}/edit", name="app_matchs_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Matchs $match, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MatchsType::class, $match);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_matchs_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('matchs/edit.html.twig', [
            'match' => $match,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idMatch}", name="app_matchs_delete", methods={"POST"})
     */
    public function delete(Request $request, Matchs $match, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$match->getIdMatch(), $request->request->get('_token'))) {
            $entityManager->remove($match);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_matchs_index', [], Response::HTTP_SEE_OTHER);
    }
}
