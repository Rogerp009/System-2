<?php require_once("../../php/validate/check_session.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>Pedidos | Cliente </title>
	
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
			<li class="opened">
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
			<a href="clientes.php"><i class="entypo-home"></i>Inicio</a>
		</li>
		<li class="active">
			<a href="pedidos.php"><i class="entypo-basket"></i>Crear Pedidos</a>
		</li>		
	</ol>

	<section>
		<div class="row">
			<div class="col-xs-12">
				<div class="panel panel-success" data-collapsed="0">	
					<!-- panel head -->
					<div class="panel-heading">
						<div class="panel-title">Reservar Productos</div>				
					</div>			
					<!-- panel body -->
					<div class="panel-body">				
						<p>Panel donde puede reservar tus productos.</p>			
					</div>				
				</div>				
			</div>
			<hr/>
			<div class="col-xs-12">
				<div class="col-sm-12">
					<div class="row">
						<div class="well well-sm">
							<h4>Importante! Verifique sus datos si son correctos.</h4>
						</div>								
					</div>
					<form id="rootwizard-2" method="post" action="" class="form-wizard validate" novalidate="novalidate">
						
						<div class="steps-progress" style="margin-left: 101.5px; margin-right: 101.5px;">
							<div class="progress-indicator" style="width: 0px;"></div>
						</div>
						
						<ul>
							<li class="completed active">
								<a href="#tab2-1" data-toggle="tab"><span>1</span>Información Personal</a>
							</li>
							<li class="">
								<a href="#tab2-2" data-toggle="tab"><span>2</span>Dirección</a>
							</li>
							<li>
								<a href="#tab2-4" data-toggle="tab"><span>3</span>Productos</a>
							</li>
							<li>
								<a href="#tab2-5" data-toggle="tab"><span>4</span>Contraseña</a>
							</li>
						</ul>
						
						<div class="tab-content" style="margin-left: 84px; margin-right: 84px;">
							<div class="tab-pane active" id="tab2-1">
								
								<div class="row">
									
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" for="full_name">Nombre</label>
											<input class="form-control" name="nombre" id="nombre" data-validate="required"><span for="full_name" class="validate-has-error" style="display: none;">This field is required.</span>
										</div>
									</div>
									
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" for="birthdate">Apellido</label>
											<input class="form-control" name="apellido" id="apellido" data-validate="required"><span for="birthdate" class="validate-has-error" style="display: none;">This field is required.</span>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" for="birthdate">Cedula</label>
											<input class="form-control" name="cedula" id="cedula" data-validate="required" ><span for="birthdate" class="validate-has-error" style="display: none;">This field is required.</span>
										</div>
									</div>									
									
								</div>
								
								<div class="row">
									
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" for="birthdate">Usuario</label>
											<input class="form-control" name="usuario" id="usuario" data-validate="required"><span for="birthdate" class="validate-has-error" style="display: none;">This field is required.</span>
										</div>
									</div>

								</div>
								
							</div>
							
							<div class="tab-pane" id="tab2-2">
								
								<div class="row">
									
									<div class="col-md-8">
										<div class="form-group">
											<div class="form-group">
												<label class="control-label" for="about">Dirección</label>
												<textarea class="form-control autogrow" name="direccion" id="direccion" data-validate="minlength[10]" rows="5" placeholder="Dirección donde va hacer envio los Productos" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 99px;"></textarea>
											</div>
										</div>
									</div>
									
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" for="door_no">Telefono</label>
											<input class="form-control" name="telefono" id="telefono" data-validate="number" placeholder="Telefono"><span for="door_no" class="validate-has-error" style="display: none;">Please enter a valid number.</span>
										</div>
									</div>
									
								</div>							
								<div class="row">
									
									<div class="col-md-5">
										<div class="form-group">
											<label class="control-label" for="city">Cuidad</label>
											<input class="form-control" name="city" id="city" data-validate="required" placeholder="Ciudad"><span for="city" class="validate-has-error" style="display: none;">El campo se requiere.</span>
										</div>
									</div>
									
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" for="state">Municipio</label>
											
											<select id="municipio" name="test" class="selectboxit visible">
												<optgroup>
													<option value="1">Antolín del Campo</option>
													<option value="2">Arismendi</option>
													<option value="3">Díaz</option>
													<option value="4">García</option>
													<option value="5">Gómez</option>
													<option value="6">Maneiro</option>
													<option value="7">Marcano</option>
													<option value="8">Mariño</option>
													<option value="9">Península de Macanao</option>
													<option value="10">Tubores</option>
													<option value="11">Villalba</option>
												</optgroup>
											</select>
										</div>
									</div>
									
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label" for="zip">Codigo Postal</label>
											<input class="form-control" name="zip" id="zip" data-mask="****" data-validate="required" placeholder="Codigo Postal"><span for="zip" class="validate-has-error" style="display: none;">El campo se requiere.</span>
										</div>
									</div>
									
								</div>
								
							</div>							
							
							<div class="tab-pane" id="tab2-4">
								
								<strong>Productos para la Box</strong>
								<br>
								<br>
								
								<div class="row"> <!-- 300ml -->
								
									<div class="col-md-1">
										<label class="control-label">&nbsp;</label>
										<p class="text-right">
											<span class="label label-info">1</span>											
										</p>				
									</div>
									
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label" for="job_position_1">Agua</label>
											<input id="nombre_1" class="form-control" name="job_position_1" id="job_position_1" data-validate="require" placeholder="Your current job">											
										</div>
									</div>
									
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label" for="job_position_1">Presentación</label>
											<input id="presentacion_1" class="form-control" name="job_position_1" id="job_position_1" data-validate="require" placeholder="Your current position">
										</div>
									</div>
									
									<div class="col-md-2">
										<div class="form-group">
											<label class="text-center control-label" for="job_position_start_date_1">Cantidad</label>
											<select id="select_1" class="form-control">
												<option>0</option>	
												<option>1</option>
												<option>5</option>
												<option>10</option>
												<option>15</option>
												<option>20</option>
												<option>25</option>
												<option>30</option>
												<option>35</option>
												<option>40</option>
												<option>45</option>
												<option>50</option>
												<option>55</option>
												<option>60</option>
												<option>65</option>
												<option>75</option>
												<option>80</option>
												<option>85</option>
												<option>90</option>
												<option>95</option>
												<option>100</option>											
											</select>												
										</div>
									</div>

									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label" for="job_position_end_date_1">Aceptar</label>
											<button id="aceptar_1" type="button" class="btn btn-red btn-icon">Aceptar<i class="entypo-check"></i></button>
										</div>
									</div>
									
									<div class="col-md-2">									
										<label class="control-label" for="job_position_end_date_1">Detalles</label>
										<div class="label label-default" id="stock_1">Stock</div>																				
									</div>

								</div> <!-- 300ml -->
								
								<div class="row"> <!-- 300ml -->
								
									<div class="col-md-1">
										<label class="control-label">&nbsp;</label>
										<p class="text-right">
											<span class="label label-info">2</span>											
										</p>				
									</div>
									
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label" for="job_position_2">Agua</label>
											<input id="nombre_2" class="form-control" name="job_position_2" id="job_position_1" data-validate="require" placeholder="Your current job">											
										</div>
									</div>
									
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label" for="job_position_2">Presentación</label>
											<input id="presentacion_2" class="form-control" name="job_position_2" id="job_position_1" data-validate="require" placeholder="Your current position">
										</div>
									</div>
									
									<div class="col-md-2">
										<div class="form-group">
											<label class="text-center control-label" for="job_position_start_date_2">Cantidad</label>
											<select id="select_2" class="form-control">
												<option>0</option>	
												<option>1</option>
												<option>5</option>
												<option>10</option>
												<option>15</option>
												<option>20</option>
												<option>25</option>
												<option>30</option>
												<option>35</option>
												<option>40</option>
												<option>45</option>
												<option>50</option>
												<option>55</option>
												<option>60</option>
												<option>65</option>
												<option>75</option>
												<option>80</option>
												<option>85</option>
												<option>90</option>
												<option>95</option>
												<option>100</option>											
											</select>												
										</div>
									</div>
									
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label" for="job_position_end_date_2">Aceptar</label>
											<button id="aceptar_2" type="button" class="btn btn-red btn-icon">Aceptar<i class="entypo-check"></i></button>
										</div>
									</div>
									
									<div class="col-md-2">									
										<label class="control-label" for="job_position_end_date_1">Detalles</label>
										<div class="label label-default" id="stock_2">Stock</div>																				
									</div>									
								</div> <!-- 300ml -->	



								<div class="row"> <!-- 300ml -->
								
									<div class="col-md-1">
										<label class="control-label">&nbsp;</label>
										<p class="text-right">
											<span class="label label-info">3</span>											
										</p>				
									</div>
									
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label" for="job_position_3">Agua</label>
											<input id="nombre_3" class="form-control" name="job_position_3" id="job_position_3" data-validate="require" placeholder="Your current job">											
										</div>
									</div>
									
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label" for="job_position_3">Presentación</label>
											<input id="presentacion_3" class="form-control" name="job_position_3" id="job_position_3" data-validate="require" placeholder="Your current position">
										</div>
									</div>
									
									<div class="col-md-2">
										<div class="form-group">
											<label class="text-center control-label" for="job_position_start_date_3">Cantidad</label>
											<select id="select_3" class="form-control">
												<option>0</option>	
												<option>1</option>
												<option>5</option>
												<option>10</option>
												<option>15</option>
												<option>20</option>
												<option>25</option>
												<option>30</option>
												<option>35</option>
												<option>40</option>
												<option>45</option>
												<option>50</option>
												<option>55</option>
												<option>60</option>
												<option>65</option>
												<option>75</option>
												<option>80</option>
												<option>85</option>
												<option>90</option>
												<option>95</option>
												<option>100</option>											
											</select>												
										</div>
									</div>
									
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label" for="job_position_end_date_3">Aceptar</label>
											<button id="aceptar_3" type="button" class="btn btn-red btn-icon">Aceptar<i class="entypo-check"></i></button>
										</div>
									</div>
									
									<div class="col-md-2">									
										<label class="control-label" for="job_position_end_date_1">Detalles</label>
										<div class="label label-default" id="stock_3">Stock</div>																				
									</div>									
								</div> <!-- 300ml -->
								
								<div class="row"> <!-- 300ml -->
								
									<div class="col-md-1">
										<label class="control-label">&nbsp;</label>
										<p class="text-right">
											<span class="label label-info">4</span>											
										</p>				
									</div>
									
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label" for="job_position_4">Agua</label>
											<input id="nombre_4" class="form-control" name="job_position_4" id="job_position_4" data-validate="require" placeholder="Your current job">											
										</div>
									</div>
									
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label" for="job_position_4">Presentación</label>
											<input id="presentacion_4" class="form-control" name="job_position_4" id="job_position_4" data-validate="require" placeholder="Your current position">
										</div>
									</div>
									
									<div class="col-md-2">
										<div class="form-group">
											<label class="text-center control-label" for="job_position_start_date_4">Cantidad</label>
											<select id="select_4" class="form-control">
												<option>0</option>	
												<option>1</option>
												<option>5</option>
												<option>10</option>
												<option>15</option>
												<option>20</option>
												<option>25</option>
												<option>30</option>
												<option>35</option>
												<option>40</option>
												<option>45</option>
												<option>50</option>
												<option>55</option>
												<option>60</option>
												<option>65</option>
												<option>75</option>
												<option>80</option>
												<option>85</option>
												<option>90</option>
												<option>95</option>
												<option>100</option>											
											</select>												
										</div>
									</div>
									
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label" for="job_position_end_date_4">Aceptar</label>
											<button id="aceptar_4" type="button" class="btn btn-red btn-icon">Aceptar<i class="entypo-check"></i></button>
										</div>
									</div>
									<div class="col-md-2">									
										<label class="control-label" for="job_position_end_date_1">Detalles</label>
										<div class="label label-default" id="stock_4">Stock</div>																				
									</div>									
								</div>	
								<div class="row"> <!-- 300ml -->
								
									<div class="col-md-1">
										<label class="control-label">&nbsp;</label>
										<p class="text-right">
											<span class="label label-info">5</span>											
										</p>				
									</div>
									
									<div class="col-md-3">
										<div class="form-group">
											<label class="control-label" for="job_position_5">Agua</label>
											<input id="nombre_5" class="form-control" name="job_position_5" id="job_position_5" data-validate="require" placeholder="Your current job">											
										</div>
									</div>
									
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label" for="job_position_5">Presentación</label>
											<input id="presentacion_5" class="form-control" name="job_position_5" id="job_position_5" data-validate="require" placeholder="Your current position">
										</div>
									</div>
									
									<div class="col-md-2">
										<div class="form-group">
											<label class="text-center control-label" for="job_position_start_date_5">Cantidad</label>
											<select id="select_5" class="form-control">
												<option>0</option>	
												<option>1</option>
												<option>5</option>
												<option>10</option>
												<option>15</option>
												<option>20</option>
												<option>25</option>
												<option>30</option>
												<option>35</option>
												<option>40</option>
												<option>45</option>
												<option>50</option>
												<option>55</option>
												<option>60</option>
												<option>65</option>
												<option>75</option>
												<option>80</option>
												<option>85</option>
												<option>90</option>
												<option>95</option>
												<option>100</option>											
											</select>												
										</div>
									</div>
									
									<div class="col-md-2">
										<div class="form-group">
											<label class="control-label" for="job_position_end_date_5">Aceptar</label>
											<button id="aceptar_5" type="button" class="btn btn-red btn-icon">Aceptar<i class="entypo-check"></i></button>
										</div>
									</div>	

									<div class="col-md-2">									
										<label class="control-label" for="job_position_end_date_1">Detalles</label>
										<div class="label label-default" id="stock_5">Stock</div>																				
									</div>																							
								</div> <!-- 300ml -->								
							</div>

							<hr />						
							<div class="tab-pane" id="tab2-5">																	
								<div class="" style="">
									<div class="form-group" class="col-md-6">
										<label class="control-label">Introduza su contraseña</label>
														
										<div class="input-group">
											<div class="input-group-addon">
												<i class="entypo-key"></i>
											</div>
											<div class="col-md-5">			
												<input class="form-control" name="password" id="password" data-validate="required" placeholder="" type="password" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Por razones de seguridad antes de generar la orden de compra se necesita la contraseña!" data-original-title="Importante">
											</div>
											<div class="col-md-3">
												<div id="error_password" class="label label-danger" style="display:none;">Contraseña Incorrecta</div>
											</div>
										</div>
									</div>
								</div>	
								<div class="row">
									<div class="col-md-6">
										<div id="void" class="alert alert-danger" style="display:none;"><strong>Importante!</strong> No asignado anignado ningun tipo de producto.</div>
									</div>
								</div>


								<div class="form-group">
									<button id="terminar_orden" type="submit" class="btn btn-primary">Terminar Orden</button>
								</div>
								
									<a id="notification" style="display:none;" href="javascript: toastr.info('Mensaje');">Information Message</a>
																
							</div>
							
							<ul class="pager wizard">
								<li class="previous disabled">
									<a href="#"><i class="entypo-left-open"></i> Atras</a>
								</li>
								
								<li class="next">
									<a href="#">Siguiente <i class="entypo-right-open"></i></a>
								</li>
							</ul>
						</div>

					</form>				
				</div>
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
	<link rel="stylesheet" href="/../assets/js/selectboxit/jquery.selectBoxIt.css">
	<script src="/../assets/js/jquery.bootstrap.wizard.min.js"></script>

	<script src="/../assets/js/jquery.validate.min.js"></script>
	<script src="/../assets/js/jquery.inputmask.bundle.min.js"></script>
	<script src="/../assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>
	<script src="/../assets/js/bootstrap-datepicker.js"></script>
	<script src="/../assets/js/bootstrap-switch.min.js"></script>
	<script src="/../assets/js/jquery.multi-select.js"></script>
	<script src="/../assets/js/neon-chat.js"></script>
	<script src="/../assets/js/neon-custom.js"></script>
	<script src="/../custom_assets/js/custom_produccion.js"></script>
	<script src="/../assets/js/neon-demo.js"></script>

</body>
</html