<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class CafeController extends AbstractController
{
    #[Route('/liste-typecafe', name: 'app_liste_typecafe')]
    public function index(): Response
    {
        return $this->render('cafe/liste-typecafe.html.twig', [
        ]);
    }
}
