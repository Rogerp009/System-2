<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>Tremonti | Iniciar Sessión</title>

	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/css/neon.css">
	<link rel="stylesheet" href="assets/css/custom.css">	
    <link rel="stylesheet" href="assets/css/skins/blue-light.css">	
    <!-- Custom CSS -->
    <link href="assets2/css/freelancer.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	
</head>
<body class="skin-blue page-fade login-page login-form-fall" data-url="http://neon.dev">

<div class="login-container">
	
	<div class="login-header login-caret">
		
		<div class="login-content">			
            <div class="intro-text">               
                <img class="img-responsive" src="resOne/assets/img/profile.png" alt="" width="150px" style="margin: 0 auto;">
                <a href="index.php"><span class="name">Agua mineral Tremonti C.A.</span></a>
            </div>
			
			<p class="description" style="color:#FFFFFF;">Estimado usuario, Iniciar sesión para acceder al área de administración!</p>

			<!-- progress bar indicator -->
			<div class="login-progressbar-indicator">
				<h3>43%</h3>
				<span>Cargando...</span>
			</div>

		</div>
		
	</div>
	
	<div class="login-progressbar">
		<div></div>
	</div>
	
	<div class="login-form">
		
		<div class="login-content">
				<div id="error" class="alert alert-danger" style="display:none;">
					<strong>Datos Incorrectos.</strong>				
				</div>
				<div id="error_interno" class="alert alert-danger" style="display:none;">
					<strong>Ah ocurrido un error.</strong>				
				</div>				
			<form method="post" role="form" id="form_login" name="login">
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>
						
						<input type="text" class="form-control" name="username" id="username" placeholder="Nombre de Usuario" autocomplete="off" />
					</div>
					
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
					<button type="submit" class="btn btn-primary btn-block btn-login" name="entrar" id="entrar">
						Entrar
						<i class="entypo-login"></i>
					</button>
				</div>
				
			</form>
			
			<div class="login-bottom-links">				
				<a href="#" class="link">Olvido su contraseña?</a>						
			</div>
			
		</div>
		
	</div>
	
</div>

	<!-- Custom -->		
	<script src="custom_assets/path/to/jquery-1.11.1.min.js" type="text/javascript"></script>	
	
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