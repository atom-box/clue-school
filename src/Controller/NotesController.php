<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Forms;
// 
use Symfony\Component\Form\Extension\Csrf\CsrfExtension;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Csrf\CsrfTokenManager;
use Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator;
use Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage;




class NotesController extends AbstractController
{
    /**
     * @Route("/notes", name="notes")
     */
    public function showNotes(): Response
    {
        $formFactory = Forms::createFormFactory();

        //  Todo. Protection against CSRF attacks is built into the Form component, but you need to explicitly enable it. See more at
        // at the docs     https://symfony.com/doc/current/components/form.html#csrf-protection


        return $this->render('notes/index.html.twig', [ ]);

    }
}