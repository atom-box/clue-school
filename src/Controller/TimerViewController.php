<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TimerViewController extends AbstractController
{
    private $timers;

    /**
     * @Route("/timer", name="timer")
     */
    public function showTimer(): Response
    {
        $timers = [
            [
                "description" => "yogurt making",
                "duration" => 6,
                "id" => 1,
            ],
            [
                "description" => "reading break: novel",
                "duration" => 15,
                "id" => 2,
            ],
        ];
        
        return $this->render('timer/index.html.twig', ['timers' => $timers]);

    }
}