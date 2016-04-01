<?php  require_once("php/validate/check_session.php");?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>Sessión | Administrador </title>
	
	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="assets/css/font-icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/css/neon.css">
	<link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/skins/blue-light.css">
	
    <link href="assets2/css/custom.loading.css" rel="stylesheet">

	<script src="assets/js/jquery-1.10.2.min.js"></script>

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
				<a href="index.html">
					<!--<img src="assets/images/logo@2x.png" width="120" alt="" />-->
                    <div class="intro-text-a">
                        <span class="name">San Onofre</span>
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
				<a href="index.html">
					<i class="entypo-home"></i>
					<span>Inicio</span>
				</a>				
			</li>
			<li class="">
				<a href="registrar_all.php">
					<i class="glyphicon glyphicon-user"></i>
					<span>Registrar</span>
				</a>
			</li>
			<li>
				<a href="medicamentos.html">
					<i class="glyphicon glyphicon-plus-sign"></i>
					<span>Medicamento</span>
				</a>
			</li>
			<li>
				<a href="especialidad.html">
					<i class="glyphicon glyphicon-list-alt"></i>
					<span>Especialidad</span>
				</a>
			</li>
			<li>
				<a href="examenes.html">
					<i class="glyphicon glyphicon-file"></i>
					<span>Examenes</span>
				</a>
			</li>
			<li>
				<a href="forms-main.html">
					<i class="glyphicon glyphicon-tasks"></i>
					<span>Totales</span>
				</a>
				<ul>
					<li>
						<a href="forms-main.html">
							<span>Paciente</span>
						</a>
					</li>
					<li>
						<a href="forms-advanced.html">
							<span>Consultas</span>
						</a>
					</li>
					<li>
						<a href="forms-wizard.html">
							<span>Examenes</span>
						</a>
					</li>
					<li>
						<a href="forms-validation.html">
							<span>Recipes</span>
						</a>
					</li>
					<li>
						<a href="forms-masks.html">
							<span>Recaudado</span>
						</a>
					</li>
					<li>
						<a href="forms-sliders.html">
							<span>Citas</span>
						</a>
					</li>
					<li>
						<a href="forms-file-upload.html">
							<span>Totales</span>
						</a>
					</li>
				</ul>
			</li>
		</ul>
				
	</div><!-- sidebar-menu -->	


	<div class="main-content">
		
		<div class="row">
			<div class="col-md-6 col-sm-8 clearfix">		
				<ul class="user-info pull-left pull-none-xsm">
					<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
				
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<h2>Nombre de usuario
								<a href="profile.php" class="username"><small class="text-info" ></small></a>
							</h2>
						</a>				
					</li>
				</ul>			
			</div>	
	
			<div class="col-md-6 col-sm-4 clearfix hidden-xs">		
				<ul class="list-inline links-list pull-right">			
					<li>
						<a href="lockscreen.html" class="salir">Salir<i class="entypo-logout right"></i></a>
					</li>
				</ul>
			</div>
		</div>
		
		<hr/>

		<ol class="breadcrumb bc-3">
			<li>
				<a href="administrador.php"><i class="entypo-home"></i>Inicio</a>
			</li>
		</ol>

		<!-- Footer -->
		<footer class="main">
			&copy; 2014 <strong>San Onofre</strong> Website 2014.<a href="" target="_blank">Todos los derechos reservados.</a>
		</footer> 		
  	</div><!-- main-content -->
</div><!-- page-container -->

	<link rel="stylesheet" href="assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="assets/js/rickshaw/rickshaw.min.css">

    <!-- Custom -->
    <script src="custom_assets/js/custom.js"></script>
	<script src="custom_assets/js/custom_admin.js"></script>

	<!-- Bottom Scripts -->
	<script src="assets/js/gsap/main-gsap.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
	<script src="assets/js/jquery.sparkline.min.js"></script>
	<script src="assets/js/rickshaw/vendor/d3.v3.js"></script>
	<script src="assets/js/rickshaw/rickshaw.min.js"></script>
	<script src="assets/js/raphael-min.js"></script>
	<script src="assets/js/morris.min.js"></script>
	<script src="assets/js/toastr.js"></script>
	<script src="assets/js/neon-chat.js"></script>
	<script src="assets/js/neon-custom.js"></script>
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>