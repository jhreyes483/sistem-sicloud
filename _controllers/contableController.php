
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


   // fk_motivo // select
   // `id_pago`, `hora`, `fecha`, `actor`, `estado`, `valor`, `fk_user`, `fk_egreso`, `fk_motivo`


   public function dilipagos(){
      if( isset($_POST) && !empty($_POST) ){
         $o = new Session();
         $s = $o->desencriptaSesion();
     
         $b  = $this->db->insertPago([
            date('h:i'),
            date('Y-m-d'),
            $this->getSql('actor'),
            $this->getSql('estado'),
            $this->getSql('valor'),
            ($s['usuario']['ID_us']),
            $this->getSql('fk_egreso'),
            $this->getSql('fk_motivo'),
         ]);
         if($b){
            $_SESSION['message'] = 'Inserto datos';
            $_SESSION['color']   = 'success';
         }else{
            $_SESSION['message'] = 'Error al insertar pago';
            $_SESSION['color']   = 'danger';
         }
      }
      $tmp =  $this->db->verMotivPago();
      foreach( $tmp as $d ) $this->_view->motivo[$d[0]] = $d[1];
      $tmp = $this->db->verEgreso();
      foreach( $tmp as $d ) $this->_view->egreso[$d[0]] = $d[1];
      $this->_view->status = [ 1 =>'Cancelado',2 => 'Deuda' ];
      $this->_view->renderizar('dilipagos');
   }

}


?>.