<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\TypeCafeRepository;

class CafeController extends AbstractController
{
    #[Route('/liste-typecafe', name: 'app_liste_typecafe')]
    public function listeCafe(TypeCafeRepository $typeCafeRepository): Response
    {
        $typeCafe = $typeCafeRepository->findAll();
        return $this->render('cafe/liste-typecafe.html.twig', [
            'typeCafe' => $typeCafe
        ]);
    }
    #[Route('/modifier-typecafe', name: 'app_modifier_typecafe')]
    public function modifierTypeCafe(): Response
    {
   
    return $this->render('cafe/modifier-typecafe.html.twig', [
   
    ]);
    }
}
