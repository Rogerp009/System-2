<?php require_once("../../php/validate/check_session.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>Precios | Cliente </title>
	
	<link rel="stylesheet" href="/../assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="/../assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="/../assets/css/font-icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/../assets/css/neon.css">
	<link rel="stylesheet" href="/../assets/css/custom.css">
    <link rel="stylesheet" href="/../assets/css/skins/blue-light.css">
	<script src="/../assets/js/jquery-1.10.2.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	
</head>
<body class="page-body page-fade" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->	
	
	<div class="sidebar-menu">	
			
		<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="cliente.php">
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
				<a href="cliente.php">
					<i class="glyphicon glyphicon-home"></i>
					<span>Inicio</span>
				</a>				
			</li>
			<li class="">
				<a href="forms-main.html">
					<i class="glyphicon glyphicon-tasks"></i>
					<span>Stocks</span>
				</a>
				<ul>
					<li>
						<a href="pedidos.php">
							<span>Lista de Pedidos</span>
						</a>
					</li>				
					<li class="">
						<a href="pedidos.php">
							<span>Pedidos</span>
						</a>
					</li>
					<li>
						<a href="forms-wizard.html">
							<span>Cancelar</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="opened active">
				<a href="precios.php">
					<i class="glyphicon glyphicon-list-alt"></i>
					<span>Precios</span>
				</a>				
			</li>					
		</ul>
				
	</div>	
	<div class="main-content">
		
<!-- Nameuser and log out-->		
<div class="row">
	
	<!-- Profile Info and Notifications -->
	<div class="col-md-6 col-sm-8 clearfix">
		
		<ul class="user-info pull-left pull-none-xsm">
		
						<!-- Profile Info -->
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
	
	<!-- Raw Links -->
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
			<a href="cliente.php"><i class="entypo-home"></i>Inicio</a>
		</li>
		<li class="active">
			<a href="precios.php"><i class="entypo-list"></i>Precios</a>
		</li>		
	</ol>

	<section>
		<div class="row">
			<div class="col-xs-12">		
				<div class="panel panel-success" data-collapsed="0">	
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Listado de Precios</div>				
					</div>			
					<!-- panel body -->
					<div class="panel-body">				
						<p>Panel donde puede ver el listado de precios de Agua Mineral Tremonti.</p>				
					</div>				
				</div>				
			</div>
			<hr/>
			<div class="col-xs-12">
				<div class="col-sm-9">
					as
				</div>
				<article class="col-sm-3">
						aas
				</article>
			</div>

		</div>

	</section>




<!-- Footer -->
<footer class="main">

	&copy; 2015 <strong>Tremonti C.A.</strong> Website 2015.<a href="" target="_blank">Todos los derechos reservados.</a>
	
</footer>	

	<link rel="stylesheet" href="/../assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="/../assets/js/rickshaw/rickshaw.min.css">

	<!-- Custom -->
	<script src="/../custom_assets/js/custom_client.js"></script>

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
	<script src="/../assets/js/raphael-min.js"></script>
	<script src="/../assets/js/morris.min.js"></script>
	<script src="/../assets/js/toastr.js"></script>
	<script src="/../assets/js/neon-custom.js"></script>
	<script src="/../assets/js/neon-demo.js"></script>

</body>
</html