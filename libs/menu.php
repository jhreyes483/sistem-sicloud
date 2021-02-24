<?php

    $aP= [];
    $aMenu['A'][1]         = [ 'USUARIOS'];
    $aMenu['A'][1][1]      = [ 'Admin Solicitud', ''.BASE_URL.'admin/ControlUsuarios', 'S1S'];
    $aMenu['A'][1][2]      = [ 'Acumulación de puntos',''.BASE_URL.'comercial/puntos', 'S1P'];
    $aMenu['A'][1][3]      = [ 'Facturación',''.BASE_URL.'factura', 'S1F'];  
    $aMenu['A'][1][4]      = [ 'Consulta factura', ''.BASE_URL.'supervisor/consFactura', 'S1CF'];
    $aMenu['A'][1][5]      = [ 'Inf Ventas Facturación', ''.BASE_URL.'supervisor/facturas', 'S1FF'];
    $aMenu['A'][1][6]      = [ 'Inf Ventas general', ''.BASE_URL.'supervisor/infvrango', 'INVF'];
    $aMenu['A'][1][7]      = [ 'Solicitudes "comercial"',''.BASE_URL.'comercial/solicitud', 'FGRJIO'];
    $aMenu['A'][1][8]      = [ 'Solicitudes "proveedor"',''.BASE_URL.'proveedor/pedidos','WSGOS1C'];

    $aMenu['A'][2]         = [ 'PRODUCTOS'];
    $aMenu['A'][2][1]      = [ 'Catalogo',''.BASE_URL.'cliente/catalogo','S1C'] ;
    $aMenu['A'][2][2]      = [ 'Crear producto', ''.BASE_URL.'producto/create','S1PCL'];
    $aMenu['A'][2][3]      = [ 'Ingresar producto', ''.BASE_URL.'producto/ingreso','S1PL'];
    $aMenu['A'][2][4]      = [ 'Editar producto', ''.BASE_URL.'producto?edit=1','SwebS1PLE'];  // logistica/productos/?edit=1
    $aMenu['A'][2][5]      = [ 'Solicitar producto', ''.BASE_URL.'proveedor/pedido','DFERA' ];
   // $aMenu['A'][2][6]      = [ 'Sistema de alertas', 'CU0014-alertas.php','S1A'];
    $aMenu['A'][2][6]      = [ 'Stock', ''.BASE_URL.'producto','S1SDF']; 
    $aMenu['A'][2][7]      = [ 'Cantidad',''.BASE_URL.'logistica/cantidad', 'S1CT'];
    $aMenu['A'][2][8]      = [ 'Categoria',''.BASE_URL.'logistica/categoria','S1CG'];
   // $aMenu['A'][2][9]     = [ 'Inf Bodega', 'CU0012-informebodega.php','S1B'];
    $aMenu['A'][3]         = [ 'ADMIN SISTEMA'];
    $aMenu['A'][3][1]      = [ 'log errores',''.BASE_URL.'admin/logError','S1LE'];  // admin/logError
    $aMenu['A'][3][2]      = [ 'log actividades',''.BASE_URL. 'admin/logActividad', 'S1LA'];
    $aMenu['A'][3][3]      = [ 'log notificaciones',''.BASE_URL. 'admin/logNotificacion', 'S1LN'];
    $aMenu['A'][4]         = [ 'EDICION'];
    $aMenu['A'][4][1]      = [ 'Categorias',''.BASE_URL. 'categoria', 'S1CC'];
    $aMenu['A'][4][2]      = [ 'Empresas',''.BASE_URL. 'empresa', 'S1CE'];
    $aMenu['A'][4][3]      = [ 'Unid medida',''.BASE_URL. 'medida', 'S1CM'];
    $aMenu['A'][4][4]      = [ 'Productos', ''.BASE_URL.'producto?edit','S1PLE'];  
    $aMenu['A'][4][5]      = [ 'Telefonos',''.BASE_URL.'admin/directorioTelefonico','SFASD'];
    $aMenu['A'][4][6]      = [ 'Cuentas', ''.BASE_URL.'user', 'S1CCSM' ];// OJO  NO CAMBIAR EL TOKEN, ES EL DE EDITAR USARIO
    $aMenu['A'][5]         = [ 'INICIO',''.BASE_URL.'admin/index', 'S1AAFRT'];

    $aMenu['B'][1]         = [ 'CONSTITUCION'];
    $aMenu['B'][1][1]      = [ 'QUIENES SOMOS',''.BASE_URL.'index/entidad'];
    $aMenu['B'][1][2]      = [ 'MISION Y VISION', ''.BASE_URL.'Index/mision'];
    $aMenu['B'][2]         = [ 'PROMOCIONES',''.BASE_URL.'index/promocion'];
    $aMenu['B'][3]         = [ 'PRODUCTOS'];
    $aMenu['B'][3][1]      = [ 'CATALOGO',''.BASE_URL.'cliente/catalogo','S1C'];
   //$aMenu['B'][3][2]      = [ 'INF BODEGA','CU0012-informebodega.php'];
    $aMenu['B'][3][2]      = [ 'CATEGORIAS',''.BASE_URL.'logistica/categoria','S1CG'];
    $aMenu['B'][3][3]      = [ 'CANTIDAD',''.BASE_URL.'logistica/cantidad', 'S1CT' ];
//    $aMenu['B'][3][5]      = [ 'SISTEMA ALERTAS', 'CU0014-alertas.php'];
    $aMenu['B'][3][4]      = [ 'STOCK',''.BASE_URL.'producto','S1SDF'];
    $aMenu['B'][4]         = [ 'PROCESOS', 'tablaRegistro.php'];
    $aMenu['B'][4][1]      = [ 'CREAR PRODUCTO', ''.BASE_URL.'producto/create','S1PCL'];
    $aMenu['B'][4][2]      = [ 'INGRESO PRODUCTO', ''.BASE_URL.'producto/ingreso','S1PL'];
    $aMenu['B'][4][3]      = [ 'EDITAR PRODUCTOS', ''.BASE_URL.'producto?edit=1','S1PLE'];
    $aMenu['B'][4][4]      = [ 'SOLICITAR PEDIDO', ''.BASE_URL.'proveedor/pedido','DFERA' ];
    $aMenu['B'][5]         = [ 'INICIO',''.BASE_URL.'logistica/index', 'S1AADFR'];

    $aMenu['S'][1]         = [ 'CONSTITUCION'];
    $aMenu['S'][1][1]      = [ 'QUIENES SOMOS',''.BASE_URL.'index/entidad'];
    $aMenu['S'][1][2]      = [ 'MISION Y VISION', ''.BASE_URL.'index/mision'];
    $aMenu['S'][2]         = [ 'PROMOCIONES',''.BASE_URL.'index/promocion'];
    $aMenu['S'][4]         = [ 'INF. VENTAS',''.BASE_URL.'supervisor/facturas', 'S1FF'  ];
    $aMenu['S'][4][1]      = [ 'Inf Ventas general', ''.BASE_URL.'supervisor/infvrango', 'INVF'];
    $aMenu['S'][4][2]      = [ 'Inf Ventas Facturacion', ''.BASE_URL.'supervisor/facturas', 'S1FF'];
    $aMenu['S'][4][3]      = [ 'Consulta Facturas',''.BASE_URL.'supervisor/consFactura', 'S1CF'];
    $aMenu['S'][4][4]      = [ 'Solicitudes "comercial"',''.BASE_URL.'comercial/solicitud', 'FGRJIO'];
    $aMenu['S'][5]         = [ 'PRODUCTOS'];
    $aMenu['S'][5][1]      = [ 'CATALOGO',''.BASE_URL.'cliente/catalogo','S1C'];
    $aMenu['S'][5][2]      = [ 'ALERTAS',''.BASE_URL.'logistica/cantidad','S1CT'];
    $aMenu['S'][5][3]      = [ 'STOCK',''.BASE_URL.'producto','S1SDF'];
    $aMenu['S'][6]         = [ 'INICIO',''.BASE_URL.'supervisor/index', 'S1FAHFK'];

    $aMenu['V'][1]         = [ 'CONSTITUCION'];
    $aMenu['V'][1][1]      = [ 'QUIENES SOMOS',''.BASE_URL.'index/entidad'];
    $aMenu['V'][1][2]      = [ 'MISION Y VISION', ''.BASE_URL.'index/mision'];
    $aMenu['V'][2]         = [ 'PROMOCIONES',''.BASE_URL.'index/promocion'];
    $aMenu['V'][3]         = [ 'PRODUCTOS'];
    $aMenu['V'][3][1]      = [ 'CATALOGO',''.BASE_URL.'cliente/catalogo','S1C'];
    $aMenu['V'][3][2]      = [ 'CATEGORIAS', ''.BASE_URL. 'categoria', 'S1CC'];
    $aMenu['V'][3][3]      = [ 'CANTIDAD',''.BASE_URL.'logistica/categoria','S1CG'];
    $aMenu['V'][3][5]      = [ 'STOCK',''.BASE_URL.'producto','S1SDF'];
    $aMenu['V'][4]         = [ 'USUARIOS'];
    $aMenu['V'][4][1]      = [ 'CUENTAS', ''.BASE_URL.'admin/ControlUsuarios', 'S1S'];
    $aMenu['V'][4][2]      = [ 'PUNTOS',''.BASE_URL.'comercial/puntos', 'S1P'];
    $aMenu['V'][4][3]      = [ 'FACTURACION',''.BASE_URL.'factura', 'S1F'];
    //$aMenu['S'][4][2]      = [ 'Inf Ventas Facturacion', ''.BASE_URL.'supervisor/facturas', 'S1FF'];
    $aMenu['V'][4][4]      = [ 'INF. VENTAS', ''.BASE_URL.'supervisor/facturas', 'S1FF'];
    $aMenu['V'][4][5]      = [ 'CONSULTA FACTURA',''.BASE_URL.'supervisor/consFactura', 'S1CF'];
    $aMenu['V'][4][6]      = [ 'SOLICITUD USARIO',''.BASE_URL.'comercial/solicitud', 'FGRJIO'];
    $aMenu['V'][5]         = [ 'INICIO',''.BASE_URL.'comercial/index', 'DFEGAAG'];

    $aMenu['P'][1]         = [ 'CONSTITUCION'];
    $aMenu['P'][1][1]      = [ 'QUIENES SOMOS',''.BASE_URL.'index/entidad'];
    $aMenu['P'][1][2]      = [ 'MISION Y VISION', ''.BASE_URL.'index/mision'];
    $aMenu['P'][2]         = [ 'PROMOCIONES',''.BASE_URL.'index/promocion'];
    $aMenu['P'][3]         = [ 'CATALOGO',''.BASE_URL.'cliente/catalogo','S1C'];
    $aMenu['P'][4]         = [ 'PEDIDOS',''.BASE_URL.'proveedor/pedidos','WSGOS1C'];
    $aMenu['P'][5]         = [ 'INICIO',''.BASE_URL.'proveedor/index', 'PFPGAAG'];

    $aMenu['C'][1]         = [ 'FERRETERIA'];
    $aMenu['C'][1][1]      = [ 'QUIENES SOMOS',''.BASE_URL.'index/entidad'];
    $aMenu['C'][1][2]      = [ 'MISION Y VISION', ''.BASE_URL.'index/mision'];
    $aMenu['C'][2]         = [ 'CATALOGO',''.BASE_URL.'cliente/catalogo','S1C'];
    $aMenu['C'][3]         = [ 'PROMOCIONES',''.BASE_URL.'index/promocion'];
    $aMenu['C'][4]         = [ 'CONTACTO',''.BASE_URL.'index/informes'];
    $aMenu['C'][5]         = [ 'INICIO',''.BASE_URL.'cliente/', 'PFDGSERT'];

?>
