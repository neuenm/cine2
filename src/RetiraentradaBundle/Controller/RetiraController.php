<?php

namespace RetiraentradaBundle\Controller;

use RetiraentradaBundle\Entity\Reserva;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use RetiraentradaBundle\Form\ReservaType;




class RetiraController extends Controller
{
    public function retiraEntradaAction (Request $request){
        $reserva= new Reserva();
        $form=$this->CreateForm(ReservaType::class,$reserva);
        $form->handleRequest($request);
        $nombre=0;
        if ($form->isSubmitted()){
            if ($form->isValid()){
                $em=$this->getDoctrine()->getEntityManager();
                $reserva_repo=$em->getRepository("RetiraentradaBundle:Reserva");
                $reserva= $reserva_repo->findOneBy(array("codigo"=>$form->get("codigo")->getData(), "estado"=>"Activo"));
                if (count($reserva)==1){
                    $user=($reserva->getIdUser());
                    $funcion=($reserva->getIdFuncion());
                    $cantidad=($reserva->getCantidad());
                    $reserva->setEstado("Inactivo");
                    $em->persist($reserva);
                    $flush = $em->flush();
                    return $this->render('RetiraentradaBundle:Retira:exito.html.twig', array(
                        "user"=>$user,
                        "funcion"=>$funcion,
                        "cantidad"=>$cantidad,
                        "reserva"=>$reserva,
                    ));
                }else{
                    return $this->render('RetiraentradaBundle:Retira:noreserva.html.twig');
                }
            }
        }
        return $this->render('RetiraentradaBundle:Retira:retira.html.twig', array(
            "form"=>$form->createView(),
        ));
    }
}
