<?php

namespace RetiraentradaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RetiraentradaBundle:Default:index.html.twig');
    }
}
