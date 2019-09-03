<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CommonController extends AbstractController
{
    
    public function index()
    {
        return $this->render('principal/index.html.twig');
    }
}
