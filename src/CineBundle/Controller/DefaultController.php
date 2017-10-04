<?php
namespace CineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CineBundle:Default:index.html.twig');
    }
}
