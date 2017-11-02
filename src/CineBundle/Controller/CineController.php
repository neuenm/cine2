<?php
namespace CineBundle\Controller;


use CineBundle\CineBundle;
use CineBundle\Entity\Cine;
use CineBundle\Entity\Sala;
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
                $cine= $cine_repo->findOneBy(array("nombre"=>$form->get("nombre")->getData(), "estado"=>"Activo"));
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
                        return $this->redirect('/cine/nuevo/salas/'. $cine->getId());
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
        $em->persist($cine);

        $salas_repo= $em->getRepository("CineBundle:Sala");
        $funciones_repo= $em->getRepository("CineBundle:Funcion");

        $salas= $salas_repo->findBy(array('cine' => $id));
        for ($i = 0; $i <= count($salas)-1; $i++) {
            $salas[$i]->setEstado("Inactivo");
            $em->persist($salas[$i]);
            $idSala= $salas[$i]->getId();
            $flush = $em->flush();

            $funciones=$funciones_repo->findBy(array('idSala' => $idSala));
            if (isset($funciones)){
                for ($j = 0; $j <= count($funciones)-1; $j++) {
                    $funciones[$j]->setEstado("Inactivo");
                    $em->persist($funciones[$j]);
                    $flush = $em->flush();
                }
            }
        }


        if ($flush == null) {
            $status = "El Cine se borro del listado";
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
