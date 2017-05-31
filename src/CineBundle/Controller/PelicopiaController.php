<?php

namespace CineBundle\Controller;


use CineBundle\Entity\Pelicopia;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CineBundle\Form\PelicopiaType;
use Symfony\Component\HttpFoundation\Session\Session;

class PelicopiaController extends Controller
{
    private $session ;
    public function __construct() {
        $this->session = new Session();
    }


    public function nuevaAction(Request $request)
    {
        $pelicopia = new Pelicopia();
        $form=$this->CreateForm(PelicopiaType::class,$pelicopia);
        $form->handleRequest($request);



        if ($form->isSubmitted()){
            if ($form->isValid()){
                    $pelicopia ->setIdPeli($form->get("idPeli")->getData());
                    $pelicopia ->setIdFormato($form->get("idFormato")->getData());
                    $pelicopia-> setidioma($form->get("idioma")->getData());
                    $pelicopia-> setEstado ($form->get("estado")->getData());


                    $em = $this->getDoctrine()->getEntityManager();
                    $em->persist($pelicopia);
                    $flush = $em->flush();

                    if ($flush==null){
                        $status ="Pelicula agregada correctamente";
                    }else{
                        $status="No se ah podido agregar a pelicula";
                    }
                }
            }else{
                $status="Formulario innvalido";
            }
        $this->session->getFlashBag()-> add("status",$status);


    
        return $this->render('CineBundle:Pelicopia:nueva.html.twig', array(
            "form"=>$form->createView(),
        ));
    }





    public function editaAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $pelicula_repo = $em->getRepository("CineBundle:Pelicopia");
        $pelicopia = $pelicula_repo->find($id);
        $form=$this->CreateForm(PelicopiaType::class,$pelicopia);
        $form->handleRequest($request);


        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $pelicopia ->setIdPeli($form->get("idPeli")->getData());
                $pelicopia ->setIdFormato($form->get("idFormato")->getData());
                $pelicopia-> setidioma($form->get("idioma")->getData());
                $pelicopia-> setEstado ($form->get("estado")->getData());


                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($pelicopia);
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
        return $this->render('CineBundle:Pelicopia:edita.html.twig', array(
            "form" => $form->createView(),
            "pelicula"=>$pelicopia,
        ));
    }


    public function eliminaAction(Request $request,$id){
        $em = $this->getDoctrine()->getEntityManager();
        $pelicula_repo = $em->getRepository("CineBundle:Pelicopia");
        $pelicula = $pelicula_repo->find($id);
        $pelicula->setEstado("Inactivo");


        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($pelicula);
        $flush = $em->flush();

        if ($flush == null) {
            $status = "La pelicula se borro del listado";
        } else {
            $status = "Error no se pudo eliminar";
        }
        $this->session->getFlashBag()->add("status", $status);
        return $this->redirect($this->generateUrl("pelicopia_index"));
    }


    public function indexAction(){
        $em=$this->getDoctrine()->getEntityManager();

        $pelicopia=$em->CreateQuery("select c from CineBundle:Pelicopia c where c.estado='Activo'");
        $pelicopia=$pelicopia->getResult();


        return $this->render('CineBundle:Pelicopia:index.html.twig', array(
            "pelicopias"=>$pelicopia,
        ));
    }
}
