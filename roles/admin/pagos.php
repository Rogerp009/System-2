<?php require_once("../../php/validate/check_session.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>Pagos | Administrador </title>
	
	<link rel="stylesheet" href="/../assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="/../assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="/../assets/css/font-icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/../assets/css/neon.css">
	<link rel="stylesheet" href="/../assets/css/custom.css">
    <link rel="stylesheet" href="/../assets/css/skins/blue-light.css">
	 <link href="/../assets2/css/load3.css" rel="stylesheet">  
    <link href="/../assets2/css/custom.loading.css" rel="stylesheet">


	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	
</head>
<body class="page-body page-fade cargando" data-url="">

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

		<section class="" id=""><!-- Area de reportes-->		
			<div class="alert alert-info"><strong>Importante!</strong>Registre los comprobantes emitido por el banco.</div>

			<div class="row">
						<div class="row">
							<div class="col-md-12">
								
								<div class="panel panel-primary" data-collapsed="0">
								
									<div class="panel-heading">
										<div class="panel-title">
											Producción
										</div>
										
										<div class="panel-options">
											<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
											<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
											<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
										</div>
									</div>
										
									<div class="panel-body">								
										<form role="form" id="form_registrar" class="form-horizontal form-groups-bordered validate" method="POST">																	
											<div class="form-group">
												<label class="col-sm-3 control-label">Tipo Producto</label>
												
												<div class="col-sm-2">
													<select class="form-control" id="tipo_banco" name="producto">
														<option value="Agua">Banco de Venezuela</option>								
														<option value="Agua">Banesco</option>
														<option value="Agua">Banco Mercantil</option>
														<option value="Agua">Bicentenario Banco Universal</option>
														<option value="Agua">Bancaribe</option>
														<option value="Agua">Banco Exterior</option>
														<option value="Agua">Banco del Tesoro</option>
														<option value="Agua">Banco Industrial de Venezuela</option>
														<option value="Agua">Banco Nacional de Crédito</option>
														<option value="Agua">Banco Fondo Común</option>
														<option value="Agua">Banco Caroní</option>
														<option value="Agua">Banco Activo</option>
														<option value="Agua">Banplus</option>
														<!--<option value="Hielo">Hielo</option>-->
													</select>
												</div>
											</div>

											<div class="form-group">
												<label class="col-sm-3 control-label">Codigo Comprobante</label>										
												<div class="col-sm-5">
                                            <input type="text" class="form-control" id="comprobante" name="comprobante" data-validate="number" name="cedula" data-message-required="Campo no puede estar vacio.">

												</div>
											</div>

							
											<div class="form-group">
												<label for="field-1" class="col-sm-3 control-label">Monto</label>
												
												<div class="col-sm-5">
													<input id="monto" class="form-control" data-mask="fdecimal"  data-dec="." data-rad="." maxlength="10" type="text"></div>
											</div>

											<div class="form-group">
												<label for="field-1" class="col-sm-3 control-label">Fecha</label>
												
												<div class="col-sm-5">
													<input id="fecha" name="fecha" type="text" class="form-control datepicker" data-start-date="-2d" data-end-date="+1w">
												</div>
											</div>

											<div class="form-group" id="btn_registrar">
												<div class="col-sm-offset-3 col-sm-5">
													<button id="registar" type="submit" class="btn btn-red btn-lg" id="registrar">Registrar</button>
												</div>
											</div> 	
										</form>							
									</div>												
								</div>				
							</div>
							
						</div> 				
			</div>
		</section>


		<!-- Footer -->
		<footer class="main">

			&copy; 2015 <strong>Tremonti C.A.</strong> Website 2015.<a href="" target="_blank">Todos los derechos reservados.</a>
			
		</footer>			
  	</div><!-- main-content -->
</div>

	<link rel="stylesheet" href="/../../assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="/../../assets/js/rickshaw/rickshaw.min.css">

	<script src="/../assets2/js/jquery-1.11.0.js"></script>
	<!-- 	<script src="/../custom_assets/js/custom_admin.js"></script>	 -->
	<!-- Bottom Scripts -->
	<script src="../../assets/js/gsap/main-gsap.js"></script>
	<script src="../../assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="../../assets/js/bootstrap.min.js"></script>
	<script src="../../assets/js/joinable.js"></script>
	<script src="../../assets/js/resizeable.js"></script>
	<script src="../../assets/js/neon-api.js"></script>
	<script src="../../assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="../../assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
	<script src="../../assets/js/jquery.sparkline.min.js"></script>
	<script src="../../assets/js/rickshaw/vendor/d3.v3.js"></script>
	<script src="../../assets/js/rickshaw/rickshaw.min.js"></script>

	<script src="../../assets/js/raphael-min.js"></script>
	<script src="../../assets/js/morris.min.js"></script>
	<script src="../../assets/js/toastr.js"></script>
	<script src="../../assets/js/neon-chat.js"></script>
	<script src="../../assets/js/neon-custom.js"></script>
	<script src="../../assets/js/neon-demo.js"></script>
<script type="text/javascript">
(function($, window, undefined){
	"use strict";
	$(document).ready(function(e){
		var monto = 0;
		var fecha = "";
		var banco = "";
		var comprobante = "";


		$("#registar").click(function(){
			monto = $("#monto").val();
			fecha = $("#fecha").val();
			banco = $("#tipo_banco").val();
			comprobante = $("#comprobante").val();

		});

	});//End $(document).ready(function(){
})(jQuery, window);//end ($,window,undefined)
</script>
</body>
</html>