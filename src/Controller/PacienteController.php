<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PacienteController extends AbstractController
{
    /**
     * @Route("/paciente", name="paciente")
     */
    public function index()
    {
        return $this->render('paciente/index.html.twig', [
            'controller_name' => 'PacienteController',
        ]);
    }
}
