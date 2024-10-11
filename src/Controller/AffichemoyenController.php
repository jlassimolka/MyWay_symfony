<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Ligne;
use App\Repository\LigneRepository;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;

class AffichemoyenController extends AbstractController
{
    #[Route('/affichemoyen', name: 'app_affichemoyen')]
    public function index(Request $request, LigneRepository $ligneRepository, PaginatorInterface $paginator): Response
    {
        $lignes = $ligneRepository->findAll();

        $pagination = $paginator->paginate(
            $lignes,
            $request->query->getInt('page', 1),
            6
        );

        return $this->render('affichemoyen/index.html.twig', [
            'lignes' => $pagination,
        ]);
    }

    #[Route('/affichemoyen/{id}', name: 'app_affichemoyen_details')]
    public function details(Ligne $ligne): Response
    {
        return $this->render('affichemoyen/details.html.twig', [
            'ligne' => $ligne,
        ]);
    }
    
    #[Route('/rechercher', name: 'app_affichemoyen_rechercher')]
    public function rechercher(Request $request, LigneRepository $ligneRepository, PaginatorInterface $paginator): Response
    {
        $nom = $request->query->get('nom');

        $query = $ligneRepository->createQueryBuilder('l')
            ->join('l.moyentp', 'm')
            ->andWhere('m.nom LIKE :nom')
            ->setParameter('nom', '%' . $nom . '%')
            ->getQuery();

        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            6
        );

        return $this->render('affichemoyen/index.html.twig', [
            'lignes' => $pagination,
        ]);
    }
   
}
