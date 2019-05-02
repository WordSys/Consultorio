<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ConsultaController extends AbstractController
{
    /**
     * @Route("/consulta", name="consulta")
     */
    public function index()
    {
        return $this->render('consulta/index.html.twig', [
            'controller_name' => 'ConsultaController',
        ]);
    }
}
