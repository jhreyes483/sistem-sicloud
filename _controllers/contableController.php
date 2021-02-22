
<?php
class contableController extends Controller{
   private $tipo;
   //
   public function __construct($tipo = 1 ){
      //  $this obj =  1 - return array response
      //  obj de api = 2 - return bool
      //
      $this->tipo = $tipo;
      parent::__construct();
      $this->db = $this->loadModel('consultas.sql', 'sql');
      $this->_view->setCss(array('font-Montserrat', 'google', 'bootstrap.min', 'jav', 'animate', 'fontawesome-all'));
      $this->estado_pago = ['Pendiente pago', 'Registrado'];
   }

   public function index(){
      $this->_view->egresos   = $this->db->verPagos(1);
      $this->_view->ingresos  = $this->db->verPagos(2);
      $r  = $this->db->verPagosT();
      $this->_view->estado_pago  = $this->estado_pago;
      $this->verificaResul($r);
      if($this->_view->datos['response_status']=='ok'){
         $o = new c_numerosLetras;
         $t = ( array_sum(array_column($r,8))  );
         $this->_view->total['numeros']= ('$' . number_format(($t), 0, ',', '.')) ;
         $this->_view->total['letras'] =  ucfirst(strtolower( $o->convertirCifrasEnLetras($t))); 
      }
      
      $this->_view->renderizar('index');
   }


}


?>