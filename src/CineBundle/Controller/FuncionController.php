<?php

namespace CineBundle\Controller;


use CineBundle\Entity\Funcion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CineBundle\Form\FuncionType;
use Symfony\Component\HttpFoundation\Session\Session;

class FuncionController extends Controller
{
    private $session ;
    public function __construct() {
        $this->session = new Session();
    }


    public function nuevoAction(Request $request)
    {
        $funcion = new Funcion();
        $form=$this->CreateForm(FuncionType::class,$funcion);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $funcion ->setIdPeliCopia($form->get("idPeliCopia")->getData());
                $funcion->setFecha($form->get("fecha")->getData()); 
                $funcion->setHora($form->get("hora")->getData());
                $funcion-> setIdSala($form->get("idSala")->getData());
                $funcion-> setPrecio($form->get("precio")->getData());

                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($funcion);
                $flush = $em->flush();

                if ($flush == null) {
                    $status = "Se guardaron sus cambios correctamente";
                } else {
                    $status = "Error no se pudo editar, consulte al servicio tecnico";
                }
            } else {
                $status = "Formulario innvalido";
            }
            $this->session->getFlashBag()->add("status", $status);
        }

        return $this->render('CineBundle:Funcion:nueva.html.twig', array(
            "form"=>$form->createView(),
        ));
    }





    public function editaAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $cine_repo = $em->getRepository("CineBundle:Cine");
        $cine = $cine_repo->find($id);
        $form=$this->CreateForm(CineType::class,$cine);
        $form->handleRequest($request);


        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $cine ->setNombre($form->get("nombre")->getData());
                $cine->setUbicacion($form->get("ubicacion")->getData());
                $cine->setCantSalas($form->get("cantSalas")->getData());
                $cine-> setEstado ($form->get("estado")->getData());
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($cine);
                $flush = $em->flush();

                if ($flush == null) {
                    $status = "Se guardaron sus cambios correctamente";
                } else {
                    $status = "Error no se pudo editar, consulte al servicio tecnico";
                }
            } else {
                $status = "Formulario innvalido";
            }
            $this->session->getFlashBag()->add("status", $status);
        }
        return $this->render('CineBundle:Cine:edita.html.twig', array(
            "form" => $form->createView(),
            "cine"=>$cine,
        ));
    }


    public function eliminaAction(Request $request,$id){
        $em = $this->getDoctrine()->getEntityManager();
        $cine_repo = $em->getRepository("CineBundle:Cine");
        $cine = $cine_repo->find($id);
        $cine->setEstado("Inactivo");


        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($cine);
        $flush = $em->flush();

        if ($flush == null) {
            $status = "La Cine se borro del listado";
        } else {
            $status = "Error no se pudo eliminar";
        }
        $this->session->getFlashBag()->add("status", $status);
        return $this->redirect($this->generateUrl("index_cine"));
    }


    public function indexAction(){
        $em=$this->getDoctrine()->getEntityManager();
        $funcion_repo=$em->getRepository("CineBundle:Funcion");
        $funcion= $funcion_repo->findAll();


        return $this->render('CineBundle:Funcion:index.html.twig', array(
            "funciones"=>$funcion,
        ));
    }
}
