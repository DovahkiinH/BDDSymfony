<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MonControlleurController extends AbstractController
{
    #[Route('/mon/controlleur', name: 'app_mon_controlleur')]
    public function index(): Response
    {
        return $this->render('mon_controlleur/index.html.twig', [
            'controller_name' => 'MonControlleurController',
        ]);
    }
}
