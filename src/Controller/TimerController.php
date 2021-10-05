<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TimerController extends AbstractController
{
    /**
     * @Route("/timer", name="timer")
     */
    public function showTimer(): Response
    {
        return $this->render('timer/index.html.twig', [ ]);

    }
}