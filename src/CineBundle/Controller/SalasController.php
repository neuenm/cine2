<?php

namespace CineBundle\Controller;

use CineBundle\CineBundle;
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

        $sala_repo= $em->getRepository("CineBundle:Sala");
        $salasDeUnCine=$sala_repo->findBy(array('cine' => $id));


        $cantSalas=$cine->getCantSalas();
        $numero=$cantSalas;
        $sala = new Sala();
        $form = $this->createForm(SalaType::class, $sala);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            if($cantSalas>count($salasDeUnCine)){
                $numero=$cantSalas-count($salasDeUnCine)-1;
                $sala->setCine($cine);
                $sala->setEstado($form->get("estado")->getData());
                $sala->setCantButacas($form->get("cantButacas")->getData());
                $sala->setFormato($form->get("formato")->getData());
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($sala);
                $flush = $em->flush();
            }else{
                return $this->render("CineBundle:Default:index.html.twig");
            }
        }
        return $this->render('CineBundle:Salas:carga.html.twig', array(
            "cine" => $cine,
            "form"=>$form->createView(),
            "cant"=>$numero
        ));
    }
}
