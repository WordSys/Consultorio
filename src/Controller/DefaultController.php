<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        return $this->render('home/index.html.twig');
        
    }

    /**
     * @Route("/ingresar", name="ingresar")
     */
    public function ingresarAction(Request $request)
    {

        return $this->render('home/ingresar.html.twig');
        
    }

    /**
     * @Route("/nosotros", name="nosotros")
     */
    public function nosotrosAction(Request $request)
    {

        return $this->render('home/nosotros.html.twig');
        
    }

    /**
     * @Route("/cartilla", name="cartilla")
     */
    public function profesionalesCartillaAction(Request $request)
    {

        return $this->render('home/profesionales.html.twig');
        
    }
}
