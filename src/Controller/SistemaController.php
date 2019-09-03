<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SistemaController extends Controller
{
    /**
     * @Route("sistema/profesionales", name="profesionales")
     */
    public function profesionalesAction(Request $request)
    {

        return $this->render('sistema/profesionales.html.twig');
        // replace this example code with whatever you need
        /*
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
        */

    }

    /**
     * @Route("sistema/pacientes", name="pacientes")
     */
    public function pacientesAction(Request $request)
    {

        return $this->render('sistema/pacientes.html.twig');
        // replace this example code with whatever you need
        /*
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
        */

    }

    /**
     * @Route("sistema/usuarios", name="usuarios")
     */
    public function usuariosAction(Request $request)
    {

        return $this->render('sistema/usuarios.html.twig');
        // replace this example code with whatever you need
        /*
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
        */

    }

    /**
     * @Route("sistema/turnos", name="turnos")
     */
    public function turnosAction(Request $request)
    {

        return $this->render('sistema/turnos.html.twig');
        // replace this example code with whatever you need
        /*
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
        */

    }

}
