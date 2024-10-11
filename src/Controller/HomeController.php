<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/')]
class HomeController extends AbstractController
{

    #[Route('/', name: 'app_home', methods: ['GET'])]
    public function index(): Response
    {

        if (!$this->getUser()) {
            return $this->redirectToRoute('app_login');
        }


        if ($this->getUser()->getEmailVerified()) {
            return $this->render('home/index.html.twig', [
                'controller_name' => 'HomeController',
                'user' => $this->getUser(),
                'email' => 'Your account is already verified'
            ]);
        }


        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'user' => $this->getUser(),
            'email' => 'Your account is not verified, check your email'
        ]);
    }
}
