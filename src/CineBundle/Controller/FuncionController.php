<?php
namespace CineBundle\Controller;


use CineBundle\CineBundle;
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

     public function check_in_range($start_date, $end_date, $date_from_user)
    {
        return $date_from_user >= $start_date && $date_from_user <= $end_date;
    }
    public function nuevoAction(Request $request)
    {
        $funcion = new Funcion();
        $form=$this->CreateForm(FuncionType::class,$funcion);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $funcion_repo=$em->getRepository("CineBundle:Funcion");
                $funcion= $funcion_repo->findOneBy(array("idSala"=>$form->get("idSala")->getData(),"fecha"=>$form->get("fecha")->getData(),"hora"=>$form->get("hora")->getData()));
                $idSala=$form->get("idSala")->getData();
                $sala_repo=$em->getRepository("CineBundle:Sala");
                $sala=$sala_repo->find($idSala);

                if (count($funcion)==0){

                    $funcion = new Funcion();
                    $funcion ->setIdPeliCopia($form->get("idPeliCopia")->getData());
                    $funcion->setFecha($form->get("fecha")->getData());
                    $funcion->setHora($form->get("hora")->getData());
                    $funcion-> setIdSala($form->get("idSala")->getData());
                    $funcion-> setPrecio($form->get("precio")->getData());
                    $funcion-> setEstado("Activo");
                    $funcion-> setDisponibles($sala->getCantButacas());
                    $em->persist($funcion);
                    $flush = $em->flush();
                    if ($flush == null) {
                        $status = "Se guardaron sus cambios correctamente";
                    } else {
                        $status = "Error no se pudo editar, consulte al servicio tecnico";
                    }
                }else{
                    $status="este horario para esta sala esta ocupado. intente otro";
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
        $funcion_repo = $em->getRepository("CineBundle:Funcion");
        $funcion = $funcion_repo->find($id);
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
        return $this->render('CineBundle:Funcion:edita.html.twig', array(
            "form" => $form->createView(),
            "funcion"=>$funcion,
        ));
    }


    public function eliminaAction(Request $request,$id){
        $em = $this->getDoctrine()->getEntityManager();
        $funcion_repo = $em->getRepository("CineBundle:Funcion");
        $funcion = $funcion_repo->find($id);
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


    public function indexAction(){
        $em=$this->getDoctrine()->getEntityManager();
        $funcion_repo=$em->getRepository("CineBundle:Funcion");
        $query= $funcion_repo ->createQueryBuilder("f")
            ->select("f")
            ->where("f.estado=:estado")
            ->setParameter("estado", "Activo")
            ->groupBy("f.idPeliCopia")
            ->getQuery();
        $funcion=$query->getResult();

        
        return $this->render('CineBundle:Funcion:index.html.twig', array(
            "funciones"=>$funcion,
        ));
    }
}
