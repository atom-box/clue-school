<?php
// src/Controller/Landing.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LandingController extends AbstractController
{
    /**
     * @Route("/", name="landing")
     */
    public function showLanding(): Response
    {
        // list() DOES NOT NEED TO CALL: THE ROUTE SETS IT IN MOTION
        // return $this->render('product/index.html.twig', []); 
        // return new Response('<h1>Atlas Improv</h1>');

        return $this->render('landing/index.html.twig', [ ]);

    }
}