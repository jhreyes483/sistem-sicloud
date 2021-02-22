<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);


class apiController extends Controller{
   protected $db;
   //
   public function __construct(){
      parent::__construct();
      $this->db       = $this->loadModel('consultas.sql', 'sql');;
      $this->getApi();
   }
   //
   public function index(){
      die('Error, metodo index en api no definido');
   }
   //      
   public function isTheseParametersAvailable($params){
      $avaible = true;
      $missingparams = '';
      foreach($params as $param){
         if(!isset($_POST[$param]) || strlen($_POST[$param]) <=0 ){
            $avaible = false;
            $missingparams = $missingparams.','.$param;
         }
      }
      // Si faltan parametros
      if(!$avaible){
         $response =[];
         $response['error'] = true;
         $response['message'] = 'Parametros:'.substr($missingparams, 1, strlen($missingparams)).'vacion'; 
         // Error de visualizacion
         echo json_encode($response);
         // detener la ejecucion adicional
         die();
      }
   }
   //
   public function getApi(){
            //Una matriz que muestra la respuesta de la api
         $response = [];
            /*
            Si se trata de una llamada api
            que significa que un parameetro get llamado se establece una URL
            y con estos parametros estamos concluyendo que es una llamada api
            */
         if(isset($_GET['apicall'])){
            // Aqui van todos los llamados de la api
            switch ($_GET['apicall']) {
               // Opcion crear usuarios
            case 'selectUsuarioFactura':
            $r = $this->db->selectUsuarioFac(6, 1);
            echo json_encode($r, JSON_UNESCAPED_UNICODE);
            die();
            break;
               default:
               $response['error']      = true;
               $response['message']    = 'ingreso a api "no esta en ningun metodo"'; 
               break;
            }
         }else{
            // Si no es un api el que se estaq invocando
            // Empujar los valores apropiados en la consulta json
            if( !isset($_POST['apicalp'])){
            $response['message'] = 'Llamado invalido del api';
         }
      }
      if(isset($_POST['apicalp'])){
         switch ($_POST['apicalp']) {
         case 'insertUdateCategoria':
            $a = [
               $this->getSql('id'), 
               $this->getSql('categoria')
            ];
             $r = $this->db->actualizarDatosCategoria($a);
             if(!$r){
               $response['error']      = true;
               $response['menssage']   = $_SESSION['message'] = 'Error, no Actualizo Actegoria'.$_POST['categoria'];
               $response['contenido']  = $r;
               $_SESSION['color']      = "danger";
            }else{
               $response['error']      = false;
               $response['message']    = $_SESSION['message'] = 'Actualizo Categoria '.$_POST['categoria'];
               $response['contenido']  = $r;
               $_SESSION['color']      = "success";
            }
         header( 'location:  ../vista/formCategoria.php');
         break;
         case 'insertcategoria':
            $a = [
               $this->getSql('nom_categoria')
            ];
             $r = $this->db->insertCategoria($a);
             if(!$r){
               $response['error']      = true;
               $response['menssage']   =  $_SESSION['message'] = "Error no creo categoria";
               $response['contenido']  = $r;    
            }else{
               $response['error']      = false;
               $response['message']    = $_SESSION['message'] = 'Inserto categoria'; 
               $response['contenido']  = $r;
               $_SESSION['message']    = "Inserto categoria";
               $_SESSION['color']      = "success";
            }
         header( 'location:  ../vista/formCategoria.php');
         break;
         case 'insertUdateEmpresa':
            $a = [
               $this->getSql('ID_rut'),
               $this->getSql('nom_empresa')
            ];
             $r = $this->db->actualizarDatosEmpresa($a);
             if(!$r){
               $response['error']      = true;
               $response['menssage']   = $_SESSION['message'] = "Error, no actualizo empresa";
               $response['contenido']  = $r;
               $_SESSION['color']      = "danger";
            }else{
               $response['error']      = false;
               $response['message']    = $_SESSION['message']    = "Actualizo empresa";
               $response['contenido']  = $r;
               $_SESSION['color']      = "success";
            }
         header( 'location:  ../vista/formEmpresa.php');
         break;
         case 'insertEmpresa':
            $a = [
               $this->getSql('ID_rut'),
               $this->getSql('nom_empresa')
            ];
             $r = $this->db->insertEmpresa($a);
             if($r){
               $response['error']      = false;
               $response['message']    = $_SESSION['message']  = "Creo empresa";
               $response['contenido']  = $r;
               $_SESSION['color']      = "success";
            }else{
               $response['error']      = true;
               $response['menssage']   = $_SESSION['message'] = 'Error, no creo empresa';
               $response['contenido']  = $r;
               $_SESSION['color']      = "danger";
            }
         header( 'location:  ../vista/formEmpresa.php');
         break;
         case 'insertMedida':
            $a = [
               $this->getSql('nom_medida'),
               $this->getSql('acron_medida')
            ];
             $r = $this->db->insertMedia($a);
             if($r){
               $response['error']      = false;
               $response['menssage']   = $_SESSION['message']  = 'Creo unidad medida';
               $response['contenido']  = $r;
               $_SESSION['color']      = 'success';
            }else{
               $response['error']      =  true;
               $response['message']    = $_SESSION['message']  = "Error, no creo unidad de medida";
               $response['contenido']  = $r;
               
               $_SESSION['color']      = 'danger';
            }
         header( 'location:  ../vista/formMedida.php');
         break;
         case 'venta':
            $a = $_SESSION['CARRITO'];
            require_once 'controllerFacturacion.php';
            $objFac->facturar($a, 1);
            header( 'location:  ../vista/mostrarCarrito.php');
         break;
         case 'EliminarProducto':
            $r= $this->db->EliminarProducto($this->getSql('id'));
            if(!$r){
               $response['error']      = true;
               $response['menssage']   = $_SESSION['message'] = 'No elimino producto';
               $response['contenido']  = $r;
               $_SESSION['color']      = 'danger';
            }else{
               $response['error']      = false;
               $response['message']    = $_SESSION['message'] = 'Elimino producto'; 
               $response['contenido']  = $r;
               $_SESSION['color']      = 'success';
            }
            header( 'location:  ../vista/edicionProductoTabla.php');
         break;
         case'updateProducto':
         //  extract($_POST);
            $a = [
                  $this->getSql('ID_prod'), // 0
                  $this->getSql('nom_prod'), // 1
                  $this->getSql('val_prod'), // 2
                  $this->getSql('stok_prod'), // 3
                  $this->getSql('estado_prod'), // 4
                  $this->getSql('CF_categoria'), // 5
                  $this->getSql('CF_tipo_medida') // 6
               ];     
            $r = $this->db->editarProducto($a);
            if($r){
               $response['error']      = false;
               $response['menssage']   = $_SESSION['message'] = 'Edito producto '.$nom_prod.' de manera exitoza';
               $_SESSION['color']      = 'success';
            }else{
               $response['error']      =  true;
               $response['message']    = $_SESSION['message'] = 'Error al editar producto '.$nom_prod; 
               $_SESSION['color']      = 'danger';
            }
            header( "location:  ../vista/edicionProductoTabla.php");
            break;
            case 'insertUdateMedia':
               $a = [
                  $this->getSql('id'),
                  $this->getSql('nom'),
                  $this->getSql('acron')
               ];
            
               $r = $this->db->actualizarDatosMedida($a);
               if($r){
                  $response['error']      = false;
                  $response['menssage']   = $_SESSION['message'] = 'Actualizar medida';
                  $response['contenido']  = $r;
                  $_SESSION['color']      = 'success';
               }else{
                  $response['error']      =  true;
                  $response['message']    = $_SESSION['message'] = 'Error, Al actualizar medida no debe tener "" por seguridad';
                  $response['contenido']  = $r;
                  $_SESSION['color']      = 'danger';
               }
            header( 'location:  ../vista/formMedida.php');
            break;
            
         default:
           echo 'no esta en metodo';
            break;
         }
      }
      echo json_encode($response);
   }
}
$obj = new apiController();