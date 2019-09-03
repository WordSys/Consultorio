<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProfesionalController extends AbstractController
{
    /**
     * @Route("/profesional", name="profesional")
     */
    public function index()
    {
        return $this->render('profesional/index.html.twig', [
            'controller_name' => 'ProfesionalController',
        ]);
    }
}
