<?php

namespace CineBundle\Controller;


use CineBundle\Entity\Pelicula;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CineBundle\Form\PeliculaType;
use Symfony\Component\HttpFoundation\Session\Session;

class PeliculaController extends Controller
{
    private $session ;
    public function __construct() {
        $this->session = new Session();
    }


    public function nuevaAction(Request $request)

    {
        $pelicula = new Pelicula();
        $form=$this->CreateForm(PeliculaType::class,$pelicula);
        $form->handleRequest($request);


        if ($form->isSubmitted()){
            if ($form->isValid()){
                $em=$this->getDoctrine()->getEntityManager();
                $pelicula_repo=$em->getRepository("CineBundle:Pelicula");
                $pelicula= $pelicula_repo->findOneBy(array("nombre"=>$form->get("nombre")->getData()));
                if (count($pelicula)==0){
                    $pelicula= new Pelicula();
                    $pelicula ->setNombre($form->get("nombre")->getData());
                    $pelicula ->setDuracion($form->get("duracion")->getData());
                    $pelicula-> setFechaEstreno($form->get("fechaEstreno")->getData());
                    $pelicula-> setEstado ($form->get("estado")->getData());
                    $pelicula->  setIdGenero($form->get("idGenero")->getData());
                    $pelicula->setSinopsis($form->get("sinopsis")->getData());

                    $file = $form["imagen"]->getData();
                    $ext = $file->guessExtension();
                    $file_name = time() . $ext;
                    $file->move("uploads", $file_name);


                    $pelicula->setImagen($file_name);


                    $em = $this->getDoctrine()->getEntityManager();
                    $em->persist($pelicula);
                    $flush = $em->flush();

                    if ($flush==null){
                        $status ="Pelicula agregada correctamente";
                    }else{
                        $status="No se ah podido agregar a pelicula";
                    }
                }else{
                    $status="Esta pelicula ya esta registrada";
                }
            }else{
                $status="Formulario innvalido";
            }
        $this->session->getFlashBag()-> add("status",$status);
        }

    
        return $this->render('CineBundle:Pelicula:nueva.html.twig', array(
            "form"=>$form->createView(),
        ));
    }





    public function editaAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $pelicula_repo = $em->getRepository("CineBundle:Pelicula");
        $pelicula = $pelicula_repo->find($id);
        $form=$this->CreateForm(PeliculaType::class,$pelicula);
        $form->handleRequest($request);


        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $pelicula->setNombre($form->get("nombre")->getData());
                $pelicula->setDuracion($form->get("duracion")->getData());
                $pelicula->setFechaEstreno($form->get("fechaEstreno")->getData());
                $pelicula->setEstado($form->get("estado")->getData());
                $pelicula->setIdGenero($form->get("idGenero")->getData());
                $pelicula->setSinopsis($form->get("sinopsis")->getData());
                $file = $form["imagen"]->getData();
                $ext = $file->guessExtension();
                $file_name = time() . $ext;
                $file->move("uploads", $file_name);
                $pelicula->setImagen($file_name);
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($pelicula);
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
        return $this->render('CineBundle:Pelicula:edita.html.twig', array(
            "form" => $form->createView(),
            "pelicula"=>$pelicula,
        ));
    }


    public function eliminaAction(Request $request,$id){
        $em = $this->getDoctrine()->getEntityManager();
        $pelicula_repo = $em->getRepository("CineBundle:Pelicula");
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
        return $this->redirect($this->generateUrl("index_peli"));
    }


    public function indexAction(){
        $em=$this->getDoctrine()->getEntityManager();
        $pelicula_repo=$em->getRepository("CineBundle:Pelicula");
        $pelicula= $pelicula_repo->findByEstado("Activo");


        return $this->render('CineBundle:Pelicula:index.html.twig', array(
            "peliculas"=>$pelicula,
        ));
    }
}
