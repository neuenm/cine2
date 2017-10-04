<?php

namespace CineBundle\Controller;

use CineBundle\Entity\Pago;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CineBundle\Entity\Reserva;

class ReservaController extends Controller
{
    public function cargaAction($cantidad, $funcion)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $pagoTipo_repo = $em->getRepository("CineBundle:Formapago");
        $pagoTipo = $pagoTipo_repo->find(1);
        $funcion_repo = $em->getRepository("CineBundle:Funcion");
        $funcion = $funcion_repo->find($funcion);

        $disponibes=$funcion->getDisponibles();
        if($disponibes-$cantidad>=0){
            $funcion->setDisponibles( $disponibes-$cantidad);
            $em->persist($funcion);
            $em->flush();


            $total = $funcion->getPrecio() * $cantidad;
            $pago = New Pago();
            $pago->setMonto($total);
            $pago->setFecha(new \DateTime());
            $pago->setIdFormaPago($pagoTipo);
            $em->persist($pago);
            $em->flush();

            $reserva = New Reserva();
            $reserva->setCantidad($cantidad);
            $reserva->setIdFuncion($funcion);
            $reserva->setEstado("Activo");
            $reserva->setIdUser($this->getUser());
            $reserva->setIdPago($pago);
            $reserva->setCodigo(md5(time()));
            $em->persist($reserva);
            $em->flush();

            $codigo=$reserva->getCodigo();



            return $this->render('CineBundle:Reserva:exito.html.twig', array(
                "codigo" => $codigo,
            ));
        }else{
            return $this->render('CineBundle:Reserva:error.html.twig', array(
                "disponibles" => $disponibes,
            ));
        }
    }
}