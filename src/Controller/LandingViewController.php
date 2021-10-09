<?php
// src/Controller/Landing.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LandingViewController extends AbstractController
{
    /**
     * @Route("/", name="landing")
     */
    public function showLanding(): Response
    {
        return $this->render('landing/index.html.twig', [ ]);

    }
}