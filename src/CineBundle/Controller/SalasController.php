<?php

namespace CineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CineBundle\Entity\Cine;
use CineBundle\Entity\Sala;
use CineBundle\Form\SalaType;
use Symfony\Component\HttpFoundation\Request;

class SalasController extends Controller
{
    public function cargaAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $cine_repo = $em->getRepository("CineBundle:Cine");
        $cine = $cine_repo->find($id);

        $cantSalas=$cine->getCantSalas();
        $vistas=array();
        for ($i = 1; $i <= $cantSalas; $i++) {
            $sala = new Sala();
            $form = $this->CreateForm(SalaType::class, $sala);
            $form->handleRequest($request);
            array_push($vistas,$form->createView());
        }
        if ($form->isValid()) {
            $sala->setCine($cine);
            $sala->setEstado($form->get("estado")->getData());
            $sala->setCantButacas($form->get("cantButacas")->getData());
            $sala->setFormato($form->get("formato")->getData());
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($sala);
            $flush = $em->flush();
        }
        return $this->render('CineBundle:Salas:carga.html.twig', array(
            "cine" => $cine,
            "vistas"=>$vistas,
            "cant"=>$cantSalas
        ));
    }

    public function eliminaAction(Request $request, $id){
        $em= $this->getDoctrine()->getEntityManager();
        $funcion_repo=$em->getRepository("CineBundle:Funcion");
        $funcion= $funcion_repo->findBy($id);
        $funcion->setEstado("Inactivo");
        $em->persist($funcion);
        $flush = $em->flush();

        if ($flush == null) {
            $status = "La funcion se borro del listado";
        } else {
            $status = "Error no se pudo eliminar";
        }
        $this->session->getFlashBag()->add("status", $status);
        return $this->redirect($this->generateUrl("funcion_index"));
    }
}
