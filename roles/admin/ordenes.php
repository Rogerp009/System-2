<?php require_once("../../php/validate/check_session.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>Ordenes de Compra | Administrador </title>
	
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
			<li class="">
				<a href="administrador.php">
					<i class="entypo-home"></i>
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
							<i class="entypo-flow-line"></i>
							<span>Producto</span>
						</a>
						<ul class="" style="">
							<li class="">
								<a href="producto/agregar.php">
									<i class="entypo-flow-line"></i>
									<span>Agregar</span>
								</a>
							</li>
							<li>
								<a href="producto/modificar.php">
									<i class="entypo-flow-line"></i>
									<span>Modificar</span>
								</a>
							</li>
						</ul>						
					</li>
					<li>
						<a href="#">
							<i class="entypo-flow-line"></i>
							<span>Producción</span>
						</a>
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
							<i class="entypo-flow-line"></i>
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
			<li class="active opened active">
				<a href="#">
					<i class="glyphicon glyphicon-shopping-cart"></i>
					<span>Ordenes de Compra</span>
				</a>
			</li>
			<li class="">
				<a href="#">
					<i class="glyphicon glyphicon-shopping-cart"></i>
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
			<ol class="breadcrumb bc-3">
				<li class="active">
					<a href="administrador.php"><i class="entypo-basket"></i>Ordenes de Compras</a>
				</li>
			</ol>			

		<section class="panel_report" id=""><!-- Area de reportes-->		
			<h2>Timeline de Ordenes</h2>
			<br />
			<!-- Cargando-->
			<a href="javascript:$('#modal-reservas').modal('show', {backdrop: 'static'});">
				<div class="label label-info" id="filtro">Busqueda Rapida</div>	
			</a>

<?php
	require_once '../../php/funciones_db.php';
	$db = new funciones_BD();	
					
		if($db->reservas() != 0 || $db->reservas() != null){
			$jsondata = $db->reservas();
			$array = array();
			if($jsondata != null){
				while ($row = mysql_fetch_assoc($jsondata)) {
					$array[] = $row;
				};	
			}
		}
?>


	    	<center> <!-- Cargando-->				
		        <div class="row">   	                
			        <div class="">     
					    <div class="col-md-3">                                                                                                                 
					    </div> 		           
					    <div class="col-md-6">                                                  
					        <div class="windows8" style="display:none;"><div class="wBall" id="wBall_1"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_2"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_3"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_4"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_5"><div class="wInnerBall"></div></div></div>                                                                   
					         <div id="success"></div><!-- Mensaje Bien o Error-->                                                                      
					    </div> 
					    <div class=""> 
        						<?php
        							##$i = 0;
						            ##while ($row = mysql_fetch_row($queryProducto)) {
        							for ($i = 0; $i < count($array); $i++) {         								
        							
						        ?>					    
								<div class="timeline-centered">
						<div class="timeline-centered">
							<article class="timeline-entry left-aligned">
									
									<div class="timeline-entry-inner">
										<time class="timeline-time" datetime="2014-01-10T03:45">
											<span><?php echo $array[$i]['fecha_orden']; ?></span> 
											<span>Today</span>
										</time>
										
										<div id="codigo" class="timeline-icon bg-success">
											<i class="entypo-feather"></i>
										</div>
										
										<div class="timeline-label">
											<h2><a href="#"><?php echo $array[$i]['nombre']." ".$array[$i]['apellido']; ?></a> <span>CI:<?php echo $array[$i]['cedula']; ?></span></h2>
											<p>Total Producto:<?php echo $array[$i]['total_producto']." Bs"; ?></p>
											Cantidad:<?php echo $array[$i]['cantidad_caja']; ?>,
											<?php echo $array[$i]['tipo']." de ".$array[$i]['presentacion']; ?>
										</div>
									</div>
									
							</article>
							
						</div>
					</div>			                                                                                                                         

						     <?php } ?>	
					    </div> 				        
					</div>     			                                                             		
	         </center>
			<div class="row">
				<br />
				<div class="timeline-centered">				

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
				
	if($_SESSION["user_name"] == ""){ 
		header("Location:/../session.php"); //Redirecionar a session
		//require_once("php/destroy_session.php");
	}else{		
		if($db->reservas() != 0 || $db->reservas() != null){
			$jsondata = $db->reservas();
			$array = array();
			if($jsondata != null){
				while ($row = mysql_fetch_assoc($jsondata)) {
					$array[] = $row;
				}
			}
		}
	}	
?>

<div class="modal fade" id="modal-reservas" data-backdrop="static">
	<div class="modal-dialog">
		<div class="modal-content">			
			<div class="modal-header">
				<h4 class="modal-title">Reservas</h4>
			</div>			
			<div class="modal-body">			
				<section>
					<div id="table-1_wrapper" class="dataTables_wrapper form-inline" role="grid">
						<table class="table table-bordered datatable" id="table_3">
							<thead>
								<tr>
									<th>Nombre y Apellido</th>
									<th>Cajas</th>
									<th>Tipo</th>
									<th>Presentación</th>
									<th>Fecha</th>
									<th>Total x Producto</th>
								</tr>
							</thead>
							<tbody>
        						<?php
									for ($i=0; $i < count($array); $i++) { 								
						        ?>
						        <tr>
						            <td><?php echo $array[$i]['nombre']." ".$array[$i]['apellido'];?></td>
						            <td><?php echo $array[$i]['cantidad_caja']; ?></td>					            														            
									<td><?php echo $array[$i]['tipo']; ?></td>					            									
									<td><?php echo $array[$i]['presentacion']; ?></td>
									<td><?php echo $array[$i]['fecha_orden']; ?></td>
									<td><?php echo $array[$i]['total_producto']; ?></td>
						        </tr>																
 								<?php  } ?>												       		
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


<script type="text/javascript">
	
(function($, window, undefined){
	"use strict";
	$(document).ready(function(e){
		$("#codigo").click(function(){
			
		});
	});//End $(document).ready(function(){
})(jQuery, window);//end ($,window,undefined)	


</script>
	<link rel="stylesheet" href="/../../assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="/../../assets/js/rickshaw/rickshaw.min.css">
	<script src="/../assets/js/jquery-1.10.2.min.js"></script>
	<!-- 	<script src="/../custom_assets/js/custom_admin.js"></script>	 -->
	<!-- Bottom Scripts -->

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
	<script src="/../assets/js/raphael-min.js"></script>
	<script src="/../assets/js/morris.min.js"></script>
	<script src="/../assets/js/toastr.js"></script>
	<script src="/../assets/js/neon-chat.js"></script>
	<script src="/../assets/js/neon-custom.js"></script>
	<script src="/../assets/js/neon-demo.js"></script>
	<script src="/../custom_assets/js/custom_ordenes.js"></script>

</body>
</html>