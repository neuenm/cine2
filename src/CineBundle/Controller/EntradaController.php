<?php

namespace CineBundle\Controller;


use CineBundle\CineBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use CineBundle\Entity\Sala;
use CineBundle\Entity\Cine;
use CineBundle\Entity\Funcion;

class EntradaController extends Controller
{
    private $session ;
    public function __construct() {
        $this->session = new Session();
    }


    public function nuevaAction(Request $request,$id)
    {
        $repository=$this->getDoctrine()->getRepository("CineBundle:Funcion");
        $query=$repository->createQueryBuilder("f")
        ->select("f")
        ->distinct("idPeliCopia")
        ->leftJoin('CineBundle:Sala', 's', 'WITH', 's.id = f.idSala')
        ->leftJoin('CineBundle:Cine', 'c', 'WITH', 'c.id = s.cine')
        ->where("s.cine = :group")
        ->setParameter('group', $id)
        ->getQuery();

        $result=$query->getResult();

        return $this->render('CineBundle:Funcion:index.html.twig', array(
            "funciones"=>$result,
        ));
    }

    public function horariosAction(Request $request,$id){
        $em = $this->getDoctrine()->getEntityManager();
        $funcion_repo = $em->getRepository("CineBundle:Funcion");
        $funciones = $funcion_repo->findByidPeliCopia($id);

        return $this->render('CineBundle:Funcion:horarios.html.twig', array(
            "funciones"=>$funciones,
        ));
    }

    public function confirmaAction(Request $request, $id){
        $em = $this->getDoctrine()->getEntityManager();
        $funcion_repo = $em->getRepository("CineBundle:Funcion");
        $funciones = $funcion_repo->findByid($id);

        return $this->render('CineBundle:Funcion:confirma.html.twig', array(
            "funciones"=>$funciones,
        ));
    }
}
