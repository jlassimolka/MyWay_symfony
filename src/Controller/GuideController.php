<?php

namespace App\Controller;
use App\Controller\Chart;
use App\Entity\Guide;
use App\Form\GuideType;
use App\Repository\GuideRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Dompdf\Dompdf;






#[Route('/guide')]
class GuideController extends AbstractController
{
    #[Route('/', name: 'app_guide_index', methods: ['GET'])]
    public function index(GuideRepository $guideRepository): Response
    {
        return $this->render('guide/index.html.twig', [
            'guides' => $guideRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_guide_new', methods: ['GET', 'POST'])]
    public function new(Request $request, GuideRepository $guideRepository): Response
    {
        $guide = new Guide();
        $form = $this->createForm(GuideType::class, $guide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $guideRepository->save($guide, true);

            return $this->redirectToRoute('app_guide_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('guide/new.html.twig', [
            'guide' => $guide,
            'form' => $form,
        ]);
    }

   
#[Route('/guide/{id}', name: 'app_guide_show', methods: ['GET'])]
#[ParamConverter('guide', class: Guide::class)]
public function show(Guide $guide): Response
    {
        return $this->render('guide/show.html.twig', [
            'guide' => $guide,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_guide_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Guide $guide, GuideRepository $guideRepository): Response
    {
        $form = $this->createForm(GuideType::class, $guide);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $guideRepository->save($guide, true);

            return $this->redirectToRoute('app_guide_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('guide/edit.html.twig', [
            'guide' => $guide,
            'form' => $form,
        ]);           
    }

    #[Route('/{id}', name: 'app_guide_delete', methods: ['POST'])]
    public function delete(Request $request, Guide $guide, GuideRepository $guideRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$guide->getId(), $request->request->get('_token'))) {
            $guideRepository->remove($guide, true);
        }

        return $this->redirectToRoute('app_guide_index', [], Response::HTTP_SEE_OTHER);
    }


    #[Route('/stats', name: 'app_guide_stats')]
public function stats(GuideRepository $guideRepository): Response
{
    $ageStats = $guideRepository->getAgeStats();

    return $this->render('guide/stats.html.twig', [
        'ageStats' => $ageStats
    ]);
}
#[Route('/pdf', name: 'app_guide_pdf')]

public function pdf()
{
    $dompdf = new Dompdf();
    $html = $this->renderView('guide/pdf.html.twig', [
        'guides' => $this->getDoctrine()->getRepository(Guide::class)->findAll(),
    ]);
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $pdfContent = $dompdf->output();

    $response = new Response($pdfContent);
    $response->headers->set('Content-Type', 'application/pdf');

    return $response;
}
#[Route('/search', name:'app_guide_search', methods:['GET'])]
public function search(Request $request, GuideRepository $GuideRepository): Response
{
    $nom = $request->query->get('nom');

    $qb = $GuideRepository->createQueryBuilder('c')
        ->where('c.nom LIKE :nom')
        ->setParameter('nom', '%' . $nom . '%')
        ->orderBy('c.nom', 'ASC');

    $guides = $qb->getQuery()->getResult();

    return $this->render('guide/index.html.twig', [
        'guides' => $guides,
        'search_term' => $nom,
    ]);
}
}
