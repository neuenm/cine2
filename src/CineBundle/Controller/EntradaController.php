<?php

namespace CineBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use CineBundle\Entity\Sala;
use CineBundle\Entity\Cine;

class EntradaController extends Controller
{
    private $session ;
    public function __construct() {
        $this->session = new Session();
    }


    public function nuevaAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $query=$em->createQuery(
            "SELECT f
              FROM CineBundle:Funcion f
              INNER JOIN CineBundle:Sala s WHERE f.idSala = s.id
              INNER JOIN CineBundle:Cine x WHERE s.cine=x.id
              WHERE x.id=$id
              
              "
        );
        $result = $query->getResult();
        return $this->render('CineBundle:Funcion:index.html.twig', array(
            "funciones"=>$result,
        ));
    }


}
