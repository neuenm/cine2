<?php

namespace CineBundle\Controller;


use CineBundle\Entity\Cine;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CineBundle\Form\CineType;
use Symfony\Component\HttpFoundation\Session\Session;

class CineController extends Controller
{
    private $session ;
    public function __construct() {
        $this->session = new Session();
    }


    public function nuevoAction(Request $request)

    {
        $cine = new Cine();
        $form=$this->CreateForm(CineType::class,$cine);
        $form->handleRequest($request);


        if ($form->isSubmitted()){
            if ($form->isValid()){
                $em=$this->getDoctrine()->getEntityManager();
                $cine_repo=$em->getRepository("CineBundle:Cine");
                $cine= $cine_repo->findOneBy(array("nombre"=>$form->get("nombre")->getData()));
                if (count($cine)==0){
                    $cine= new Cine();
                    $cine ->setNombre($form->get("nombre")->getData());
                    $cine->setUbicacion($form->get("ubicacion")->getData());
                    $cine->setCantSalas($form->get("cantSalas")->getData());
                    $cine-> setEstado ($form->get("estado")->getData());

                    $em = $this->getDoctrine()->getEntityManager();
                    $em->persist($cine);
                    $flush = $em->flush();

                    if ($flush==null){
                        $status ="Cine agregado correctamente";
                    }else{
                        $status="No se a podido agregar este Cine";
                    }
                }else{
                    $status="Esta Cine ya esta registrado";
                }
            }else{
                $status="Formulario innvalido";
            }
        $this->session->getFlashBag()-> add("status",$status);
        }

    
        return $this->render('CineBundle:Cine:nuevo.html.twig', array(
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
        $cine_repo=$em->getRepository("CineBundle:Cine");
        $cine= $cine_repo->findByEstado("Activo");


        return $this->render('CineBundle:Cine:index.html.twig', array(
            "cine"=>$cine,
        ));
    }
}
