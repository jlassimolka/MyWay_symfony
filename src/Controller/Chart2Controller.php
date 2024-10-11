<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Reclamation;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ReclamationRepository;
use App\Repository\ReponseRepository;

class Chart2Controller extends AbstractController
{
    #[Route('/chart2', name: 'app_chart2')]
    public function index( ReclamationRepository $reclamationRepository , ReponseRepository $reponseRepository ) 
    {
        $nb_reclamation = $reclamationRepository->getNbReclamation();
        $nb_reponse = $reponseRepository->getNbReponse();
        return $this->render('chart2/index.html.twig', [
            'nb_reclamation' => $nb_reclamation,
            'nb_reponse' => $nb_reponse,
        ]);
    }
}
