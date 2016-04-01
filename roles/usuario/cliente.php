<?php require_once("../../php/validate/check_session.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>Sessión | Cliente </title>
	
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
			<li class="active opened active">
				<a href="cliente.php">
					<i class="glyphicon glyphicon-home"></i>
					<span>Inicio</span>
				</a>				
			</li>
			<li>
				<a href="forms-main.html">
					<i class="glyphicon glyphicon-tasks"></i>
					<span>Stocks</span>
				</a>
				<ul>
					<li>
						<a href="listado.php">
							<span>Lista de Pedidos</span>
						</a>
					</li>				
					<li>
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
			<a href="administrador.php"><i class="entypo-home"></i>Inicio</a>
		</li>
	</ol>

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


	<section>

		<div class="row">
				<div class="col-md-3">	
					<a href="javascript:$('#modal-pedidos').modal('show', {backdrop: 'static'});"> 		
					<div id="tile_producto" class="tile-stats tile-aqua">
						<div class="icon"><i class="entypo-gauge"></i></div>
						<div id="producto"></div>		
						<h3>Mis Pedidos</h3>
						<p>Producto registrado en Tremonti.</p>
					</div>	
					</a>			
				</div>				
		</div>	
		<div class="row">				
				<div class="col-xs-12">		
					<div class="label label-info">Precios</div>
					<table class="table table-bordered">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Nombre</th>
									<th class="text-center">Producto</th>
									<th class="text-center">Presentación</th>
									<th class="text-center">Precio</th>
									<th class="text-center">Precio por Caja</th>
								</tr>
							</thead>
							
							<tbody>
        						<?php
        							##$i = 0;
						            ##while ($row = mysql_fetch_row($queryProducto)) {
        							for ($i = 0; $i < count($array); $i++) {         								
        							
						        ?>
						        <tr>
						            <td class="text-center"><?php echo $array[$i]['codigo_producto']; ?></td>
									<td class="text-center"><?php echo $array[$i]['nombre_producto']; ?></td>						            
						            <td class="text-center"><?php echo $array[$i]['tipo']; ?></td>
						            <td class="text-center"><?php echo $array[$i]['presentacion']; ?></td>															            									
						            <td class="text-center"><?php echo $array[$i]['precio'].' Bs'; ?></td>	
						            <td class="text-center"><?php echo $array[$i]['precio_caja']. ' Bs'; ?></td>	
						        </tr>																

						        <?php } ?>								
							</tbody>
						</table>			
				</div>
								
				</div>
			<hr/>
		</div>

	</section>

<!-- Footer -->
<footer class="main">

	&copy; 2015 <strong>Tremonti C.A.</strong> Website 2015.<a href="" target="_blank">Todos los derechos reservados.</a>
	
</footer>	


<?php
	require_once '../../php/funciones_db.php';

	$db = new funciones_BD();
	$queryOrden = null;
	$cedula = $_SESSION["user_cedula"];
	if($_SESSION["user_name"] != ""){ 
		$queryOrden = mysql_query("SELECT * FROM orden_compra WHERE cedula_cliente = $cedula");
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
<div class="modal fade" id="modal-pedidos" data-backdrop="static">
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
									<th>Tu cedula</th>
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
						            <td><?php echo $arrayOrden[$i]['cedula_cliente']; ?></td>															            										
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
	<link rel="stylesheet" href="/../assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="/../assets/js/rickshaw/rickshaw.min.css">



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
		

		$('#table-5').dataTable({//producto
			"paging":   false,			
			"ordering": false,
			"info":     false			
		});		

		$.ajax({
			type:"POST",
			url:"../../php/admin_report2.php",
			cache:true,
			dataType:"JSON",			
			beforeSend: function(){
				$(".windows8").show();				
			},
			error: function(){
				setTimeout("window.location.href = '../../500.php'", 600);						
			},
			statusCode: {
    			404: function() {
    				setTimeout("window.location.href = '../../404.php'", 100000);
    			},
    			500: function() {
    				setTimeout("window.location.href = '../../500.php'", 600);
    			}
  			},
  			success: function (dato){
				console.debug('dato php ' + dato);
				if(dato.length != ""){
					$("#producto").html('<div class="num" data-start="0" data-prefix="" data-end="'+dat.pedido+'" data-postfix="" data-duration="1000" data-delay="0">'+dato.pedido);						
				}
			}  			
		});


	});//End $(document).ready(function(){
})(jQuery, window);//end ($,window,undefined)
</script>
</body>
</html