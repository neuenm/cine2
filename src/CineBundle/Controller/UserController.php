<?php

namespace CineBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use CineBundle\Form\UserType;
use CineBundle\Entity\User;
use Symfony\Component\HttpFoundation\Session\Session;

class UserController extends Controller
{
    private $session ;
    public function __construct() {
        $this->session = new Session();
    }

    public function loginAction(Request $request){
        $auteticationUtils=$this->get("security.authentication_Utils");
        $error= $auteticationUtils->getLastauthenticationerror();
        $last_username=$auteticationUtils->getLastUsername();
        return $this->render("CineBundle:Default:index.html.twig", array(
            "error"=>$error,
            "lastName"=>$last_username,
        ));
    }

    public function registroAction(Request $request)

    {

        $user = new User();
        $form=$this->CreateForm(UserType::class,$user);
        $form->handleRequest($request);


        if ($form->isSubmitted()){
            if ($form->isValid()){
                $em=$this->getDoctrine()->getEntityManager();
                $user_repo=$em->getRepository("CineBundle:User");
                $user= $user_repo->findOneBy(array("mail"=>$form->get("mail")->getData()));
                if (count($user)==0){
                    $user= new User();
                    $user ->setNombre($form->get("nombre")->getData());
                    $user ->setApellido($form->get("apellido")->getData());
                    $user ->setDni($form->get("dni")->getData());
                    $user ->setMail($form->get("mail")->getData());
                    $user ->setFechaNac(date_format($form->get("fechaNac")->getData(), 'Y-m-d'));

                    $factory=$this->get("security.encoder_factory");
                    $encoder=$factory->getEncoder($user);
                    $password=$encoder->encodePassword($form->get("password")->getData(),$user->getSalt());
                    $user ->setPassword($password);
                    $user ->setRole("ROLE_USER");
                    $user ->setEstado("activo");
                   // $user ->setImagen(null);
                    $em = $this->getDoctrine()->getEntityManager();
                    $em->persist($user);
                    $flush = $em->flush();

                    if ($flush==null){
                        $status ="Ahora podes iniciar sesion. Ya podes disfrutar nuestro servicio..";
                    }else{
                        $status="no te has registrado correctamente";
                    }
                }else{
                    $status="Este usuario ya esta registrado";
                }
            }else{
                $status="Formulario innvalido";
            }
        $this->session->getFlashBag()-> add("status",$status);
        }

    
        return $this->render('CineBundle:User:registro.html.twig', array(
            "form"=>$form->createView(),
        ));
    }
}
