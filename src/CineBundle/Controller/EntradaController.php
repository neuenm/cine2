<?php

namespace CineBundle\Controller;

use CineBundle\CineBundle;
use CineBundle\Entity\Cine;
use CineBundle\Entity\Reserva;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use CineBundle\Model\MP;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOExceptionInterface;

class EntradaController extends Controller
{
    private $session ;
    public function __construct() {
        $this->session = new Session();
    }


    public function nuevaAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getEntityManager();
        $repository=$em->getRepository("CineBundle:Funcion");


        $query=$repository->createQueryBuilder("f")
            ->select("f")
            ->where("f.estado = :activo")
            ->setParameter("activo", "Activo")
            ->leftJoin('CineBundle:Sala', 's', 'WITH', 's.id = f.idSala')
            ->leftJoin('CineBundle:Cine', 'c', 'WITH', 'c.id = s.cine')
            ->andwhere("s.cine = :group")
            ->setParameter("group", $id)
            ->groupBy("f.idPeliCopia")

            ->getQuery();
        $result=$query->getResult();


        return $this->render('CineBundle:Funcion:index.html.twig', array(
            "funciones"=>$result,
            "cine"=>$id
        ));
    }


    public function horariosAction(Request $request,$id,$cine){
        $em = $this->getDoctrine()->getEntityManager();
        $funcion_repo = $em->getRepository("CineBundle:Funcion");
        

        $query=$funcion_repo->createQueryBuilder("f")
            ->select("f")
            ->where("f.estado=:estado and f.idPeliCopia=:id")
            ->leftJoin('CineBundle:Sala', 's', 'WITH', 's.id = f.idSala')
            ->leftJoin('CineBundle:Cine', 'c', 'WITH', 'c.id = s.cine')
            ->andwhere("s.cine = :group")
            ->setParameter("group", $cine)
            ->setParameter("id",$id)
            ->setParameter("estado","Activo")
            ->getQuery();
        $result=$query->getResult();
        return $this->render('CineBundle:Reserva:horarios.html.twig', array(
            "funciones"=>$result,
        ));
    }

    public function confirmaAction(Request $request, $id){
        $em = $this->getDoctrine()->getEntityManager();
        $funcion_repo = $em->getRepository("CineBundle:Funcion");
        $funciones = $funcion_repo->findByid($id);

        return $this->render('CineBundle:Reserva:confirma.html.twig', array(
            "funciones"=>$funciones,
        ));
    }

    public function mercadopagoAction($precio,$cantidad)    //CODIGO QUE TE DA MERCADO PAGO DE PHP PERO TRANSFORMADO A UN ACTION DE SYMFONY
    {
        $precio = (int)$precio;
        $cantidad = (int)$cantidad;


        $mp = new MP("2397026679517594", "AQKwxdLezZsb18jivyF9sXcV8pmUJxeb");
        $mp->sandbox_mode(FALSE);

        $preference_data = array(
            "items" => array(
                array(
                    "title" => "Entradas al cine",
                    "currency_id" => "ARS",
                    "category_id" => "Category",
                    "quantity" => $cantidad,
                    "unit_price" =>$precio
                )
            )
        );
        $preference = $mp->create_preference($preference_data);
        return $this->render('CineBundle:Reserva:prueba.html.twig', array(
            "preference"=>$preference,
        ));

    }
    public function ipnAction()
    {
        $mp = new MP("2397026679517594", "AQKwxdLezZsb18jivyF9sXcV8pmUJxeb");
        $params = ["access_token" => $mp->get_access_token()];

        if (!isset($_GET["id"], $_GET["topic"]) || !ctype_digit($_GET["id"])) {
            http_response_code(400);
            $fs = new Filesystem();
            $archivo = $this->container->getParameter('kernel.root_dir') . '/informes/malo.txt';
            try {
                $fs->dumpFile($archivo, "sin valores en la url");
            } catch (IOExceptionInterface $e) {
                echo "Se ha producido un error al crear el archivo " . $e->getPath();
                echo "<script>console.log( 'Debug Objects: " . "algo salio malo" . "' );</script>";
            }
            return;
        }

// Get the payment reported by the IPN. Glossary of attributes response in https://developers.mercadopago.com
        if ($_GET["topic"] == 'payment') {
            $payment_info = $mp->get("/collections/notifications/" . $_GET["id"], $params, false);
            $merchant_order_info = $mp->get("/merchant_orders/" . $payment_info["response"]["collection"]["merchant_order_id"], $params, false);



// Get the merchant_order reported by the IPN. Glossary of attributes response in https://developers.mercadopago.com
        } else if ($_GET["topic"] == 'merchant_order') {
            $merchant_order_info = $mp->get("/merchant_orders/" . $_GET["id"], $params, false);
        }
        $fs = new Filesystem();
        $archivoPayment = $this->container->getParameter('kernel.root_dir') . '/informes/'.$_GET["id"].'/payment'.$_GET["id"].'.txt';
        $archivoOrder = $this->container->getParameter('kernel.root_dir') . '/informes/'.$_GET["id"].'/order'.$_GET["id"].'.txt';

        try {
            $fs->dumpFile($archivoPayment, json_encode($payment_info));
            $fs->dumpFile($archivoOrder, json_encode($merchant_order_info));
        } catch (IOExceptionInterface $e) {
            echo "Se ha producido un error al crear el archivo " . $e->getPath();
            echo "<script>console.log( 'Debug Objects: " . "algo salio malo" . "' );</script>";
        }

//If the payment's transaction amount is equal (or bigger) than the merchant order's amount you can release your items
        if ($merchant_order_info["status"] == 200) {
            $transaction_amount_payments = 0;
            $transaction_amount_order = $merchant_order_info["response"]["total_amount"];
            $payments = $merchant_order_info["response"]["payments"];
            foreach ($payments as $payment) {
                if ($payment['status'] == 'approved') {
                    $transaction_amount_payments += $payment['transaction_amount'];
                }
            }
            if ($transaction_amount_payments >= $transaction_amount_order) {
                echo "release your items";
            } else {
                echo "dont release your items";
            }
        }


    }
}