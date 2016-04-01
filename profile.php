<?php require_once("php/validate/check_session.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>Perfil | <?php echo ($_SESSION['user_role']); ?></title>

	<link rel="stylesheet" href="/../assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="/../assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="/../assets/css/font-icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="/../assets/css/neon.css">
	<link rel="stylesheet" href="/../assets/css/custom.css">
    <link rel="stylesheet" href="/../assets/css/skins/blue-light.css">
    <link href="assets2/css/load.css" rel="stylesheet">
	<link href="assets2/css/custom.loading.css" rel="stylesheet">
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
					<a href="index.html">
						<!--<img src="assets/images/logo@2x.png" width="120" alt="" />-->
	                    <div class="intro-text-a">
	                       <span class="name">Tremonti C.A.</span>
	                    </div>					
					</a>
				</div>
							
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
					<a href="<?php echo ($_SESSION['role']); ?>">
						<i class="entypo-home"></i>
						<span>Inicio</span>
					</a>				
				</li>	
				<li class="">
					<a href="roles/admin/registrar.php">
						<i class="glyphicon glyphicon-user"></i>
						<span>Registrar</span>
					</a>
				</li>						
			</ul>				
		</div>	

		<div class="main-content">
			
			<div class="row">
				<div class="col-md-6 col-sm-8 clearfix">		
					<ul class="user-info pull-left pull-none-xsm">
						<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
					
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<h2>Nombre de usuario
									<a href="/../profile.php" class="username"><small class="text-info" ></small></a>
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

			<hr/>
			<ol class="breadcrumb bc-3">
				<li>
					<a href="<?php echo ($_SESSION['role']); ?>"><i class="entypo-home"></i>Inicio</a>
				</li>
				<li class="active">
					<a href="profile.php"><i class="glyphicon glyphicon-user"></i>Perfil</a>
				</li>
			</ol>

			<div class="profile-env">	
				<header class="row">		
					<div class="col-sm-2">			
						<img src="assets/images/profile.png" class="img-responsive img-circle" width="120" />					
					</div>

					<div class="col-sm-7">
						<ul class="profile-info-sections">
							<li>
								<div class="profile-name">
									<strong>
										<a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Nombre de Usuario">Art Ramadani</a>
										<a href="#" class="user-status is-online tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="Online"></a>
										<!-- User statuses available classes "is-online", "is-offline", "is-idle", "is-busy" -->						
									</strong>
									<span><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tipo de Usua">Co-Founder at Laborator</a></span>
								</div>
							</li>
						</ul>
					</div>			
				</header>
		
				<section class="profile-info-tabs">		
					<div class="row">
						<div class="col-sm-offset-2 col-sm-10">			
							<ul class="user-details">
								<li>
									<a href="#" class="btn" data-toggle="tooltip" data-placement="right" title="" data-original-title="No de puede modificar">
										<i class="entypo-user"></i>
										<span></span>							
									</a>											
								</li>					
								<li>
									<a href="#" class="btn" data-toggle="tooltip" data-placement="right" title="" data-original-title="No de puede modificar">
										<i class="entypo-users"></i>
										<span></span>
									</a>
								</li>
								<li>
									<a href="javascript:$('#modal-direccion').modal('show', {backdrop: 'static'});" class="btn" data-toggle="tooltip" data-placement="right" title="" data-original-title="Se puede modificar">
										<i class="entypo-home"></i>
										<span></span>
									</a>
								</li>						
								<li>
									<a href="javascript:$('#modal-telefono').modal('show', {backdrop: 'static'});" class="btn" data-toggle="tooltip" data-placement="right" title="" data-original-title="Se puede modificar">
										<i class="entypo-mobile"></i>
										<span></span>
									</a>
								</li>									
								<li>
									<a href="#" class="btn" data-toggle="tooltip" data-placement="right" title="" data-original-title="No de puede modificar">
										<i class="entypo-minus-squared"></i>
										<span></span>
									</a>
								</li>						
								<li>
									<a href="javascript:$('#modal-email').modal('show', {backdrop: 'static'});" class="btn" data-toggle="tooltip" data-placement="right" title="" data-original-title="Se puede modificar">
										<i class="entypo-mail"></i>
										<span></span>
									</a>
								</li>						
								<li>		
									<a href="javascript:$('#modal-pass').modal('show', {backdrop: 'static'});" class="btn" data-toggle="tooltip" data-placement="right" title="" data-original-title="Se puede modificar">
										<i class="entypo-lock"></i>
										<span></span>
									</a>
								</li>					
							</ul>
							
						<!-- tabs for the profile links -->
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="extra-profile.html">
										<span>Perfil</span>
									</a>
								</li>				
							</ul>
						</div>
					</div>						
				</section>		
			</div>	

			<footer class="main">
				&copy; 2015 <strong>Tremonti C.A.</strong> Website 2015.<a href="" target="_blank">Todos los derechos reservados.</a>			
			</footer>
	  	</div>		
	</div>
											
	<!-- Pass -->
	<div class="modal fade" id="modal-pass">
		<div class="modal-dialog">
			<div class="modal-content">
				<form role="form" id="form_udapate_pass" method="POST" class="validate">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Editar Contraseña</h4>
					</div>
				
					<div class="modal-body">				
						<div class="row">
							<div class="col-md-6">
							
								<div class="form-group">
									<label for="field-1" class="control-label">Contraseña</label>
								
									<input type="password" class="form-control" id="password" name="password" data-validate="required,minlength[5]" data-message-required="Campo no puede estar vacio."/>
								</div>	
							</div>
						
							<div class="col-md-6">
							
								<div class="form-group">
									<label for="field-2" class="control-label">Confirmar</label>
								
									<input type="password" class="form-control" id="passwordConfirmar" name="passwordConfirmar" data-validate="required,minlength[5]" data-message-required="Campo no puede estar vacio.">
								</div>	
						
							</div>
						</div>			
					</div>

					<div class="row">
						<div class="col-md-12">
							<center class="center_msj">
								<div class="loanding" style="display:none;">
									<img src="assets2/img/spinner.gif" width="30">                               
									<div id="status">Cargando...</div>
								</div>							
	                        </center>
	                        <center>
								<div id="succes_pass" class="alert alert-success" style="display:none;">						
									<strong>Contraseñas Satisfactoriamente!</strong>
								</div>
								<div id="succes_error_pass" class="alert alert-danger" style="display:none;">						
									<strong>Las contraseñas no coninciden!</strong>
								</div>				
								<div id="warning_no_pass" class="alert alert-warning" style="display:none;">						
									<strong>No se pudo registrar!</strong>
								</div>										                        	
	                        </center>
	                    </div>				
					</div>			

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal" id="cerrar">Cerrar</button>
						<button type="button" class="btn btn-info" id="guardar_pass">Guardar Cambios</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Telefono -->
	<div class="modal fade" id="modal-telefono">
		<div class="modal-dialog">
			<div class="modal-content">
				<form role="form" id="form_udapate_telefono" method="POST" class="validate">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Editar Telefono</h4>
					</div>
				
					<div class="modal-body">				
						<div class="row">
							<div class="col-md-8">							
								<div class="form-group">
									<label for="field-1" class="control-label">Telefono</label>								
                                    <input type="text" class="form-control" maxlength="11" id="telefono" name="telefono" data-validate="number" data-message-required="Campo no puede estar vacio." placeholder="Telefono">
								</div>	
							</div>
						</div>			
					</div>

					<div class="row">
						<div class="col-md-12">
							<center class="center_msj">
								<div class="loanding" style="display:none;">
									<img src="assets2/img/spinner.gif" width="30">                               
									<div id="status">Cargando...</div>
								</div>							
	                        </center>
	                        <center>
								<div id="succes_telefono" class="alert alert-success" style="display:none;">						
									<strong>Telefono cambiado Satisfactoriamente!</strong>
								</div>
								<div id="succes_error_telefono" class="alert alert-danger" style="display:none;">						
									<strong>Error!</strong>
								</div>				
								<div id="warning_no_telefono" class="alert alert-warning" style="display:none;">						
									<strong>No se pudo registrar!</strong>
								</div>										                        	
	                        </center>
	                    </div>				
					</div>			

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal" id="cerrar">Cerrar</button>
						<button type="button" class="btn btn-info" id="guardar_pass">Guardar Cambios</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Direccion -->
	<div class="modal fade" id="modal-direccion">
		<div class="modal-dialog">
			<div class="modal-content">
				<form role="form" id="form_udapate_direccion" method="POST" class="validate">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Cambiar Dirección</h4>
					</div>
				
					<div class="modal-body">				
						<div class="row">
							<div class="col-md-8">							
								<div class="form-group">
									<label for="field-1" class="control-label">Dirección</label>								
                                    <input type="text" class="form-control" id="direccion" name="direccion" data-validate="required" data-message-required="Campo no puede estar vacio.">
								</div>	
							</div>
						</div>			
					</div>

					<div class="row">
						<div class="col-md-12">
							<center class="center_msj">
								<div class="loanding" style="display:none;">
									<img src="assets2/img/spinner.gif" width="30">                               
									<div id="status">Cargando...</div>
								</div>							
	                        </center>
	                        <center>
								<div id="succes_telefono" class="alert alert-success" style="display:none;">						
									<strong>Telefono cambiado Satisfactoriamente!</strong>
								</div>
								<div id="succes_error_telefono" class="alert alert-danger" style="display:none;">						
									<strong>Error!</strong>
								</div>				
								<div id="warning_no_telefono" class="alert alert-warning" style="display:none;">						
									<strong>No se pudo registrar!</strong>
								</div>										                        	
	                        </center>
	                    </div>				
					</div>			

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal" id="cerrar">Cerrar</button>
						<button type="button" class="btn btn-info" id="guardar_pass">Guardar Cambios</button>
					</div>
				</form>
			</div>
		</div>
	</div>	
	<!-- Email -->
	<div class="modal fade" id="modal-email">
		<div class="modal-dialog">
			<div class="modal-content">
				<form role="form" id="form_update_email" method="POST" class="validate">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Editar Correo Electronico</h4>
					</div>
				
					<div class="modal-body">
				
						<div class="row">
							<div class="col-md-8">
							
								<div class="form-group">
									<label for="field-1" class="control-label">Correo Electronico</label>
								
									<input type="text" class="form-control" id="email" name="email" data-validate="email" data-message-required="Campo no puede estar vacio." />   
								</div>	
							
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<center class="center_msj">
									<div class="loanding" style="display:none;">
										<img src="assets2/img/spinner.gif" width="30">                               
										<div id="status">Cargando...</div>
									</div>							
								</center>
								<center>
									<div id="succes" class="alert alert-success" style="display:none;">						
										<strong>Correo Cambiado Satisfactoriamente!</strong>
									</div>
									<div id="succes_error" class="alert alert-danger" style="display:none;">						
										<strong>Correo Electronico ya esta Registrado!</strong>
									</div>				
									<div id="warning_no_registrar" class="alert alert-warning" style="display:none;">						
										<strong>No se pudo registrar!</strong>
									</div>										                        	
								</center>
							</div>				
						</div>
				
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal" id="cerrar">Cerrar</button>
							<button type="button" class="btn btn-info" id="guardar_email">Guardar Cambios</button>
						</div>
					</div>	
				</form>	
			</div>
		</div>
	</div>
	<!-- Custom-->
	<script src="assets/js/jquery-1.10.2.min.js"></script>		
	<script src="assets/js/custom.js"></script>
	<script src="custom_assets/js/custom_admin.js"></script>

	<!-- Bottom Scripts -->

	<script src="assets/js/fileinput.js"></script>    
    <script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/gsap/main-gsap.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/neon-chat.js"></script>
	<script src="assets/js/neon-custom.js"></script>
	<script src="assets/js/neon-demo.js"></script>
</body>
</html>