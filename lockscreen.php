<?php require_once("php/validate/destroy_session.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>Tremonti | Lockscreen</title>

	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/css/neon.css">
	<link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/skins/blue-light.css">

    <!-- Custom CSS -->
    <link href="assets2/css/freelancer.css" rel="stylesheet">
	<script src="assets/js/jquery-1.10.2.min.js"></script>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	
</head>
<body class="page-body login-page is-lockscreen login-form-fall" data-url="http://neon.dev">

<div class="login-container">
	
	<div class="login-header">
		
		<div class="login-content">			
            <div class="intro-text">               
                <a href="index.html"><span class="name">Agua mineral Tremonti C.A.</span></a>
            </div>
			
			<p class="description">Estimado usuario, Iniciar sesión para acceder al área de administración!</p>

			<!-- progress bar indicator -->
			<div class="login-progressbar-indicator">
				<h3>0%</h3>
				<span>Cargando...</span>
			</div>

		</div>
		
	</div>
	
	<div class="login-form">
		
		<div class="login-content">
			
			<form method="post" role="form" id="form_lockscreen">
				
				<div class="form-group lockscreen-input">
					
					<div class="lockscreen-thumb">
						<img src="resOne/assets/img/profile.png" width="150px" class="img-circle" />
						
						<div class="lockscreen-progress-indicator">0%</div>
					</div>
					
					<div class="lockscreen-details">
						<h4></h4>
						<span data-login-text="logging in...">Desconectado</span>
					</div>
					
				</div>

				<!-- Mensaje de error-->
				<div id="error" class="alert alert-danger" style="display:none;">
					<strong>Datos Incorrectos.</strong>				
				</div>				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>
						
						<input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" autocomplete="off" />
					</div>
				
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-login">
						Entrar
						<i class="entypo-login"></i>
					</button>
				</div>
				
			</form>
			
			<div class="login-bottom-links">				
				<a href="#" class="link">Olvido su contraseña?</a>		
				<br />				
				<a href="session.php" class="olvido_pass">Iniciar sesión con una cuenta diferente</a>						
			</div>
		</div>
		
	</div>
	
</div>
	<a href="javascript:history.back(1);"></a>
	<!-- Bottom Scripts -->
	<script src="assets/js/gsap/main-gsap.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/neon-login.js"></script>
	<script src="assets/js/neon-custom.js"></script>
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>