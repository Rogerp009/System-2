<?php require_once("../../php/validate/check_session.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>Sessión | Administrador </title>
	
	<link rel="stylesheet" href="/../assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="/../assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="/../assets/css/font-icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/../assets/css/neon.css">
	<link rel="stylesheet" href="/../assets/css/custom.css">
    <link rel="stylesheet" href="/../assets/css/skins/blue-light.css">
	 <link href="/../assets2/css/load3.css" rel="stylesheet">  
    <link href="/../assets2/css/custom.loading.css" rel="stylesheet">

	<script src="/../assets/js/jquery-1.10.2.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	
</head>
<body class="page-body page-fade cargando" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->	
	<div class="sidebar-menu">				
		<header class="logo-env">			
			<!-- logo -->
			<div class="logo">
				<a href="administrador.php">
					<!--<img src="assets/images/logo@2x.png" width="120" alt="" />-->
                    <div class="intro-text-a">
                        <span class="name">Tremonti C.A.</span>
                    </div>					
				</a>
			</div>
			
			<!-- logo collapse icon -->					
			<div class="sidebar-collapse">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>			
												
			<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
					<i class="entypo-menu"></i>
				</a>
			</div>
			
		</header>
						
		<ul id="main-menu" class="">
			<!-- add class "multiple-expanded" to allow multiple submenus to open -->
			<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
			<!-- Search Bar -->
			<li id="search">
				<form method="get" action="">
					<input type="text" name="q" class="search-input" placeholder="Buscar..."/>
					<button type="submit">
						<i class="entypo-search"></i>
					</button>
				</form>
			</li>
			<li class="active opened active">
				<a href="administrador.php">
					<i class="glyphicon glyphicon-home"></i>
					<span>Inicio</span>
				</a>				
			</li>
			<li class="">
				<a href="registrar.php">
					<i class="glyphicon glyphicon-user"></i>
					<span>Registrar</span>
				</a>
			</li>
			<li class="">
				<a href="#">
					<i class="glyphicon glyphicon-tint"></i>
					<span>Productos</span>
				</a>
				<ul class="" style="">
					<li>
						<a href="#">
							<i class=""></i>
							<span>Producto</span>
						</a>
						<ul class="" style="">
							<li class="">
								<a href="producto/agregar.php">
									<i class=""></i>
									<span>Agregar</span>
								</a>
							</li>
							<li>
								<a href="producto/modificar.php">
									<i class=""></i>
									<span>Modificar</span>
								</a>
							</li>
						</ul>						
					</li>
					<li class="">
						<a href="">
							<i class=""></i>
							<span>Producción</span>
						</a>
						<ul class="" style="">
							<li class="">
								<a href="produccion/agregar.php">
									<i class="e"></i>
									<span>Agregar</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class=""></i>
									<span>Disponible</span>
								</a>
							</li>
						</ul>						
					</li>
				</ul>
			</li>
			<li class="">
				<a href="registrar.php">
					<i class="glyphicon glyphicon-road"></i>
					<span>Distribución</span>
				</a>
				<ul class="" style="">
					<li>
						<a href="camion.php">
							<i class=""></i>
							<span>Camión</span>
						</a>						
					</li>
				</ul>				
			</li>
			<li class="">
				<a href="logistica.php">
					<i class="glyphicon glyphicon-align-justify"></i>
					<span>Logística de Envio</span>
				</a>
			</li>	
			<li class="">
				<a href="ordenes.php">
					<i class="glyphicon glyphicon-shopping-cart"></i>
					<span>Ordenes de Compra</span>
				</a>
			</li>
			<li class="">
				<a href="pagos.php">
					<i class="glyphicon glyphicon-credit-card"></i>
					<span>Pagos</span>
				</a>
			</li>																					
		</ul>
				
	</div><!-- sidebar-menu -->	


	<div class="main-content">
		
		<div class="row">
			<div class="col-md-6 col-sm-8 clearfix">		
				<ul class="user-info pull-left pull-none-xsm">
					<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
				
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<h2>
							Usuario
							<a href="/../profile.php"><small class="text-info"><?php echo ($_SESSION['user_name']); ?></small></a>					
						</h2>
						</a>				
					</li>
				</ul>			
			</div>	
	
			<div class="col-md-6 col-sm-4 clearfix hidden-xs">		
				<ul class="list-inline links-list pull-right">			
					<li>
					<a href="../../lockscreen.php" class="salir">Salir<i class="entypo-logout right"></i></a>
					</li>
				</ul>
			</div>
		</div>	

		<hr />

		<section class="panel_report" id=""><!-- Area de reportes-->		
	    	<center> <!-- Cargando-->				
		        <div class="row">   	                
			        <div class="">     
					    <div class="col-md-3">                                                                                                                 
					    </div> 		           
					    <div class="col-md-6">                                                  
                                                                  
					    </div> 
					    <div class="col-md-3">                                                                                                                      
					    </div> 				        
					</div>     			                                                             		
	         </center>
			<div class="row">
				<div class="col-sm-3">	
					<a href="javascript:$('#modal-cliente').modal('show', {backdrop: 'static'});">						
					<div id="tile_client" class="tile-stats tile-red">
						<div class="icon"><i class="entypo-users"></i></div>
						<div id="cliente"></div>						
						<h3>Numero de Clientes</h3>
						<p>Clientes registrado en Tremonti.</p>
					</div>
					</a>										
				</div>
				<div class="col-sm-3">	
					<a href="javascript:$('#modal-producto').modal('show', {backdrop: 'static'});"> 		
					<div id="tile_producto" class="tile-stats tile-aqua">
						<div class="icon"><i class="entypo-gauge"></i></div>
						<div id="producto"></div>		
						<h3>Numero de productos</h3>
						<p>Producto registrado en Tremonti.</p>
					</div>	
					</a>			
				</div>		
				<div class="col-sm-3">	
					<a href="javascript:$('#modal-camion').modal('show', {backdrop: 'static'});"> 		
					<div id="tile_producto" class="tile-stats tile-green">
						<div class="icon"><i class="entypo-paper-plane"></i></div>
						<div id="camion"></div>		
						<h3>Numero de Camiones</h3>
						<p>Camiones registrado en Tremonti.</p>
					</div>	
					</a>			
				</div>		
				<div class="col-sm-3">	
					<a href="javascript:$('#modal-orden').modal('show', {backdrop: 'static'});"> 		
					<div id="tile_producto" class="tile-stats tile-pink">
						<div class="icon"><i class="entypo-paper-plane"></i></div>
						<div id="pedido"></div>		
						<h3>Numero de Pedidos</h3>
						<p>Pedidos registrado en Tremonti.</p>
					</div>	
					</a>			
				</div>									
			</div>
			<hr />

<?php
	require_once '../../php/funciones_db.php';

	$db = new funciones_BD();
	$queryClient = null;
	if($_SESSION["user_name"] != ""){ 
		$queryStock = mysql_query("SELECT * FROM stock C, producto X WHERE C.codigo_producto = X.codigo_producto");
		$num_rows_stock = mysql_num_rows($queryStock); //numero de filas retornadas
		$arrayStock = array();
		if($num_rows_stock >= 0){
			#$result_producto = mysql_fetch_array($queryProducto);
			while ($row = mysql_fetch_assoc($queryStock)) {
				$arrayStock[] = $row	;
			}
		}
	}else{
		header("Location:/../session.php"); //Redirecionar a session
		//require_once("php/destroy_session.php");
	}

?>
			
			<div class="row">
				<div class="col-sm-8">
				<div class="label label-info">Stock</div>
				<section>
					<div id="table-1_wrapper" class="dataTables_wrapper form-inline" role="grid">
						<table class="table table-bordered datatable" id="table-4">
							<thead>
								<tr>
									<th>#</th>
									<th>Cajas</th>
									<th>Unidad</th>									
									<th>Tipo</th>
									<th>Presentación</th>
									<th>Precio por Caja</th>
									<th>Total por Caja</th>
								</tr>
							</thead>
							<tbody>	
        						<?php
        							##$i = 0;
						            ##while ($row = mysql_fetch_row($queryProducto)) {
        							for ($i = 0; $i < count($arrayStock); $i++) {         								
        							
						        ?>
						        <tr>
						            <td><?php echo $arrayStock[$i]['codigo_stock']; ?></td>
									<td><?php echo $arrayStock[$i]['caja_disponibles']; ?></td>						            
						            <td><?php echo $arrayStock[$i]['unidad_disponible']; ?></td>															            										
						            <td><?php echo $arrayStock[$i]['tipo']; ?></td>	
						            <td><?php echo $arrayStock[$i]['presentacion']; ?></td>	
						            <td><?php echo $arrayStock[$i]['precio_caja'].' Bs'; ?></td>	
						            <td><?php 
						            		$caja = (int)$arrayStock[$i]['caja_disponibles'];
						            		$precio  = (int)$arrayStock[$i]['precio_caja'];
						            		$suma = $caja * $precio;

						            echo $suma.' Bs' ?></td>
						        </tr>																

						        <?php } ?>									
							</tbody>
						</table>	
							
					</div>						
				</section>						
				</div>
			</div>
		</section>


		<!-- Footer -->
		<footer class="main">

			&copy; 2015 <strong>Tremonti C.A.</strong> Website 2015.<a href="" target="_blank">Todos los derechos reservados.</a>
			
		</footer>			
  	</div><!-- main-content -->
</div>




<?php
	require_once '../../php/funciones_db.php';

	$db = new funciones_BD();
	$queryClient = null;
	if($_SESSION["user_name"] != ""){ 
		$queryProducto = mysql_query("SELECT * from producto");
		$num_rows_producto = mysql_num_rows($queryProducto); //numero de filas retornadas
		$array = array();
		if($num_rows_producto >= 0){
			#$result_producto = mysql_fetch_array($queryProducto);
			while ($row = mysql_fetch_assoc($queryProducto)) {
				$array[] = $row	;
			}
		}
	}else{
		header("Location:/../session.php"); //Redirecionar a session
		//require_once("php/destroy_session.php");
	}

?>
<!-- Mostrar Tablas-->
<!-- Modal 4 (Confirm)-->
<div class="modal fade" id="modal-producto" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<h4 class="modal-title">Productos</h4>
			</div>
			<div class="modal-body">
				<section>
					<div id="table-1_wrapper" class="dataTables_wrapper form-inline" role="grid">
						<table class="table table-bordered datatable" id="table-2">
							<thead>
								<tr>
									<th>#</th>
									<th>Nombre</th>
									<th>Tipo</th>
									<th>Presentación</th>
									<th>Precio</th>
									<th>Precio Caja</th>
								</tr>
							</thead>
							<tbody>	
        						<?php
        							##$i = 0;
						            ##while ($row = mysql_fetch_row($queryProducto)) {
        							for ($i = 0; $i < count($array); $i++) {         								
        							
						        ?>
						        <tr>
						            <td><?php echo $array[$i]['codigo_producto']; ?></td>
									<td><?php echo $array[$i]['nombre_producto']; ?></td>						            
						            <td><?php echo $array[$i]['tipo']; ?></td>
						            <td><?php echo $array[$i]['presentacion']; ?></td>															            									
						            <td><?php echo $array[$i]['precio']; ?></td>	
						            <td><?php echo $array[$i]['precio_caja']; ?></td>	
						        </tr>																

						        <?php } ?>		
							</tbody>
						</table>	
							
					</div>						
				</section>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Continuar</button>
			</div>
		</div>
	</div>
</div>

<?php
	require_once '../../php/funciones_db.php';

	$db = new funciones_BD();
	$queryClient = null;
	if($_SESSION["user_name"] != ""){ 
		$queryClient = mysql_query("SELECT * from usuario");
		$num_rows_client = mysql_num_rows($queryClient); //numero de filas retornadas
		$arrayCliente = array();
		if($num_rows_client >= 0){
			#$result_client = mysql_fetch_array($queryClient);
			while ($row = mysql_fetch_assoc($queryClient)) {
					$arrayCliente[] = $row;
			}
		}
	}else{
		header("Location:/../session.php"); //Redirecionar a session
		//require_once("php/destroy_session.php");
	}

?>

<div class="modal fade" id="modal-cliente" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">			
			<div class="modal-header">
				<h4 class="modal-title">Cientes</h4>
			</div>			
			<div class="modal-body">			
				<section>
					<div id="table-1_wrapper" class="dataTables_wrapper form-inline" role="grid">
						<table class="table table-bordered datatable" id="table-1">
							<thead>
								<tr>
									<th>Nombre y Apellido</th>
									<th>Cedula</th>
									<th>Telefono</th>
									<th>Usuario</th>
									<th>Rol</th>
								</tr>
							</thead>
							<tbody>	
        						<?php
        							$i = 1;
						            #while ($row = mysql_fetch_assoc($queryClient)) {
        							for ($i=0; $i < count($arrayCliente); $i++) { 
        								# code...
        							
						        ?>
						        <tr>
						            <td><?php echo $arrayCliente[$i]['nombre']." ".$arrayCliente[$i]['apellido']; ?></td>
						            <td><?php echo $arrayCliente[$i]['cedula']; ?></td>
						            <td><?php echo $arrayCliente[$i]['telefono']; ?></td>
									<td><?php echo $arrayCliente[$i]['username']; ?></td>						            									
									<td><?php echo $arrayCliente[$i]['rol']; ?></td>	
						        </tr>																

						        <?php } ?>		
							</tbody>
						</table>	
							
					</div>						
				</section>							
			</div>			
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Continuar</button>
			</div>
		</div>
	</div>
</div>

<?php
	require_once '../../php/funciones_db.php';

	$db = new funciones_BD();
	$queryClient = null;
	if($_SESSION["user_name"] != ""){ 
		$queryCamion = mysql_query("SELECT * from camion");
		$num_rows_camion = mysql_num_rows($queryCamion); //numero de filas retornadas
		$arrayCamion = array();
		if($num_rows_camion >= 0){
			#$result_camion = mysql_fetch_array($queryCamion);
			while ( $row = mysql_fetch_assoc($queryCamion)) {
				# code...
				$arrayCamion[] = $row;
			}				
		}
	}else{
		header("Location:/../session.php"); //Redirecionar a session
		//require_once("php/destroy_session.php");
	}

?>
<div class="modal fade" id="modal-camion" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">			
			<div class="modal-header">
				<h4 class="modal-title">Camiones</h4>
			</div>			
			<div class="modal-body">			
				<section>
					<div id="table-1_wrapper" class="dataTables_wrapper form-inline" role="grid">
						<table class="table table-bordered datatable" id="table-3">
							<thead>
								<tr>
									<th>Matricula</th>
									<th>Marca</th>
									<th>Modelo</th>
								</tr>
							</thead>
							<tbody>	
						        <tr>
						         <?php  
						         	for ($i=0; $i <count($arrayCamion) ; $i++) { 
						         							         
						         ?>
						            <td><?php echo $arrayCamion[$i]['maticula'];?></td>
						            <td><?php echo $arrayCamion[$i]['marca']; ?></td>
						            <td><?php echo $arrayCamion[$i]['modelo']; ?></td>					            									
						        </tr>																
 								<?php  }?>
						       		
							</tbody>
						</table>	
							
					</div>						
				</section>							
			</div>			
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Continuar</button>
			</div>
		</div>
	</div>
</div>

<?php
	require_once '../../php/funciones_db.php';

	$db = new funciones_BD();
	$queryOrden = null;
	if($_SESSION["user_name"] != ""){ 
		$queryOrden = mysql_query("SELECT * FROM orden_compra O, usuario U WHERE O.cedula_cliente = U.cedula");
		$num_rows_orden = mysql_num_rows($queryOrden); //numero de filas retornadas
		$arrayOrden = array();
		if($num_rows_orden >= 0){
			#$result_camion = mysql_fetch_array($queryCamion);
			while ( $row = mysql_fetch_assoc($queryOrden)) {
				# code...
				$arrayOrden[] = $row;
			}				
		}
	}else{
		header("Location:/../session.php"); //Redirecionar a session
		//require_once("php/destroy_session.php");
	}

?>
<div class="modal fade" id="modal-orden" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<h4 class="modal-title">Pedidos</h4>
			</div>
			<div class="modal-body">
				<section>
					<div id="table-1_wrapper" class="dataTables_wrapper form-inline" role="grid">
						<table class="table table-bordered datatable" id="table-5">
							<thead>
								<tr>
									<th># de Compra</th>
									<th>Monto</th>
									<th>Fecha</th>
									<th>Nombre y Apellido</th>
								</tr>
							</thead>
							<tbody>	
        						<?php
        							$i = 0;
						            ##while ($row = mysql_fetch_row($queryProducto)) {
        							for ($i = 0; $i < count($arrayOrden); $i++) {         								
        							
						        ?>
						        <tr>
						            <td><?php echo $arrayOrden[$i]['codigo_orden']; ?></td>
									<td><?php echo $arrayOrden[$i]['monto']." Bs"; ?></td>						            
						            <td><?php echo $arrayOrden[$i]['fecha_orden']; ?></td>
						            <td><?php echo $arrayOrden[$i]['nombre']." ".$arrayOrden[$i]['apellido']; ?></td>															            										
						        </tr>																

						        <?php 

						        } ?>		
							</tbody>
						</table>	
							
					</div>						
				</section>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Continuar</button>
			</div>
		</div>
	</div>
</div>
	<link rel="stylesheet" href="/../../assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="/../../assets/js/rickshaw/rickshaw.min.css">

	<!-- 	<script src="/../custom_assets/js/custom_admin.js"></script>	 -->
	<!-- Bottom Scripts -->
	<script src="/../assets/js/gsap/main-gsap.js"></script>
	<script src="/../assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="/../assets/js/bootstrap.min.js"></script>
	<script src="/../assets/js/joinable.js"></script>
	<script src="/../assets/js/resizeable.js"></script>
	<script src="/../assets/js/neon-api.js"></script>
	<script src="/../assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="/../assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
	<script src="/../assets/js/jquery.sparkline.min.js"></script>
	<script src="/../assets/js/rickshaw/vendor/d3.v3.js"></script>
	<script src="/../assets/js/rickshaw/rickshaw.min.js"></script>

	<link rel="stylesheet" href="/../../assets/js/datatables/responsive/css/datatables.responsive.css">
	<link rel="stylesheet" href="/../../assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="/../../assets/js/select2/select2.css">

	<script src="/../../assets/js/jquery.dataTables.min.js"></script>
	<script src="/../../assets/js/datatables/TableTools.min.js"></script>
	<script src="/../../assets/js/dataTables.bootstrap.js"></script>
	<script src="/../../assets/js/datatables/jquery.dataTables.columnFilter.js"></script>
	<script src="/../../assets/js/datatables/lodash.min.js"></script>
	<script src="/../../assets/js/datatables/responsive/js/datatables.responsive.js"></script>
	<script src="/../../assets/js/select2/select2.min.js"></script>
	<script src="/../custom_assets/js/custom_administrador_panel.js"></script>

	<script src="/../assets/js/raphael-min.js"></script>
	<script src="/../assets/js/morris.min.js"></script>
	<script src="/../assets/js/toastr.js"></script>
	<script src="/../assets/js/neon-chat.js"></script>
	<script src="/../assets/js/neon-custom.js"></script>
	<script src="/../assets/js/neon-demo.js"></script>

<script type="text/javascript">
	
(function($, window, undefined){
	"use strict";
	$(document).ready(function(e){
	var variablejs = "<?php echo $_SESSION['user_nombre']; ?>";	
	var apelldo = "<?php echo $_SESSION['user_apellido']; ?>";
				setTimeout(function(){			
				var opts = {
					"closeButton": true,
					"debug": false,
					"positionClass": "toast-top-right",
					"toastClass": "blue",
					"onclick": null,
					"showDuration": "3000",
					"hideDuration": "1000",
					"timeOut": "5000",
					"extendedTimeOut": "1000",
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"};
					toastr.success("Bienvenido "+variablejs+" "+apelldo, opts);
					}, 0);
		
	});//End $(document).ready(function(){
})(jQuery, window);//end ($,window,undefined)
</script>
</body>
</html>