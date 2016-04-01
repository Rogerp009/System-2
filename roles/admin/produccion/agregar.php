<?php require_once("../../../php/validate/check_session.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>Agregar | Administrador </title>
	<link rel="stylesheet" href="../../../assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="../../../assets/css/font-icons/font-awesome/css/font-awesome.min.css">	
	<link rel="stylesheet" href="../../../assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="../../../assets/css/neon.css">
	<link rel="stylesheet" href="../../../assets/css/custom.css">
    <link href="../../../assets2/css/load3.css" rel="stylesheet">  	
    <link rel="stylesheet" href="../../../assets/css/skins/blue-light.css">
	<script src="../../../assets/js/jquery-1.10.2.min.js"></script>		
    <link href="../../../assets2/css/custom.loading.css" rel="stylesheet">

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
				<a href="../administrador.php">
					<i class="entypo-home"></i>
					<span>Inicio</span>
				</a>				
			</li>
			<li class="">
				<a href="../registrar.php">
					<i class="glyphicon glyphicon-user"></i>
					<span>Registrar</span>
				</a>
			</li>
			<li class="active opened">
				<a href="#">
					<i class="glyphicon glyphicon-tint"></i>
					<span>Productos</span>
				</a>
				<ul class="" style="">
					<li class="">
						<a href="#">
							<i class=""></i>
							<span>Producto</span>
						</a>
						<ul class="" style="">
							<li class="">
								<a href="../producto/agregar.php">
									<i class="e"></i>
									<span>Agregar</span>
								</a>
							</li>
							<li>
								<a href="../producto/modificar.php">
									<i class=""></i>
									<span>Modificar</span>
								</a>
							</li>
						</ul>						
					</li>
					<li class="active opened">
						<a href="">
							<i class=""></i>
							<span>Producción</span>
						</a>
						<ul class="" style="">
							<li class="visible">
								<a href="produccion.php">
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
				<a href="../registrar.php">
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
			<li class="">
				<a href="ordenes.php">
					<i class="glyphicon glyphicon-shopping-cart"></i>
					<span>Ordenes de Compra</span>
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
					<a href="../administrador.php"><i class="entypo-home"></i>Inicio</a>
				</li>
				<li class="active">
					<a href="Agregar.php"><i class="entypo-box"></i>Producción Diaria</a>
				</li>				
			</ol>	

		<section class="panel">
			<div class="panel panel-success" data-collapsed="0">	
				<!-- panel head -->
				<div class="panel-heading">
					<div class="panel-title">Registrar Producción Diaria</div>				
				</div>			
				<!-- panel body -->
				<div class="panel-body">				
					<p>Panel donde puede registrar los productos que se han hecho diariamete.</p>							
				</div>				
			</div>			

			<br />
			<div class="row">
				<div class="col-md-12">
					<!-- Usuarios -->
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
												<select class="form-control" id="tipo_producto" name="producto">
													<option value="Agua">Agua</option>								
													<!--<option value="Hielo">Hielo</option>-->
												</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label">Presentación</label>										
											<div class="col-sm-2">
												<select class="form-control" id="presentacion" name="presentacion">
													<option value="330 ml" class="Agua">330 ml</option>
													<option value="500 ml" class="Agua">500 ml</option>
													<option value="600 ml" class="Agua">600 ml</option>													
													<option value="1500 ml" class="Agua">1500 ml</option>											
													<option value="5000 ml" class="Agua">5000 ml</option>	
													<!--																					
													<option value="Grande" class="Hielo">Grandes</option>
													<option value="Mediana" class="Hielo">Medianas</option>
													<option value="Minis" class="Hielo">Minis</option>											
													<option value="Relleno" class="Hielo">Relleno</option>													
													-->
												</select>
											</div>
										</div>

						
										<div class="form-group">
											<label for="field-1" class="col-sm-3 control-label">Cajas</label>
											
											<div class="col-sm-5">
												<input type="text" class="form-control" id="cajas" name="cajas" data-validate="number" data-message-required="Campo no puede estar vacio.">
											</div>
											<div style="margin-top:7px;" id="error_cajas"></div>
										</div>

										<div class="form-group">
											<label for="field-1" class="col-sm-3 control-label">Fecha</label>
											
											<div class="col-sm-5">
												<input id="fecha" name="fecha" type="text" class="form-control datepicker" data-start-date="-2d" data-end-date="+1w">
											</div>
										</div>

										<div class="form-group" id="btn_registrar">
											<div class="col-sm-offset-3 col-sm-5">
												<button type="submit" class="btn btn-red btn-lg" id="registrar">Registrar</button>
											</div>
										</div> 	

									</form>							
								</div>												
							</div>				
						</div>
					</div>                
				</div>
			</div>
		</section>		

    	<center> <!-- Cargando-->				
	        <div class="row">   	                
		        <div class="">     
				    <div class="col-md-3">                                                                                                                 
				    </div> 		           
				    <div class="col-md-6">                                                  
				        <div class="windows8" style="margin-top:8px;display:none;"><div class="wBall" id="wBall_1"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_2"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_3"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_4"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_5"><div class="wInnerBall"></div></div></div>                                                                   
				         <div id="success"></div><!-- Mensaje Bien o Error-->                                                                      
				    </div> 
				    <div class="col-md-3">                                                                                                                      
				    </div> 				        
				</div>     			                                                             		
         </center>

		<!-- Footer -->
		<footer class="main">

			&copy; 2015 <strong>Tremonti C.A.</strong> Website 2015.<a href="" target="_blank">Todos los derechos reservados.</a>
			
		</footer>			
  	</div><!-- main-content -->
</div>

	<link rel="stylesheet" href="../../../assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="../../../assets/js/rickshaw/rickshaw.min.css">

	<script src="../../../assets/js/jquery-1.10.2.min.js"></script>		

	<script src="../../../assets/js/gsap/main-gsap.js"></script>
	<script src="../../../assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="../../../assets/js/bootstrap.min.js"></script>
	<script src="../../../assets/js/joinable.js"></script>
	<script src="../../../assets/js/resizeable.js"></script>

	<script src="../../../assets/js/jquery.validate.min.js"></script>	
	<script src="../../../custom_assets/js/jquery.chained.min.js"></script>
	<script src="../../../assets/js/neon-api.js"></script>
	<script src="../../../assets/js/neon-chat.js"></script>
	<script src="../../../assets/js/neon-custom.js"></script>
	<script src="../../../assets/js/neon-demo.js"></script>


	<link rel="stylesheet" href="../../../assets/js/selectboxit/jquery.selectBoxIt.css">
	<link rel="stylesheet" href="../../../assets/js/daterangepicker/daterangepicker-bs3.css">

	<script src="../../../custom_assets/js/custom_producion.js"></script>
	<script src="../../../assets/js/select2/select2.min.js"></script>
	<script src="../../../assets/js/bootstrap-tagsinput.min.js"></script>
	<script src="../../../assets/js/typeahead.min.js"></script>
	<script src="../../../assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>
	<script src="../../../assets/js/bootstrap-datepicker.js"></script>
	<script src="../../../assets/js/bootstrap-timepicker.min.js"></script>
	<script src="../../../assets/js/bootstrap-colorpicker.min.js"></script>
</body>
</html>