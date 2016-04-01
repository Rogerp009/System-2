<?php require_once("../../php/validate/check_session.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>Orden de Compra | Cliente </title>
	
	<link rel="stylesheet" href="/../assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="/../assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="/../assets/css/font-icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/../assets/css/neon.css">
	<link rel="stylesheet" href="/../assets/css/custom.css">
	 <link href="../../assets2/css/load3.css" rel="stylesheet">  	
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
				<a href="#">
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
				<a href="#" id="inicio">
					<i class="glyphicon glyphicon-home"></i>
					<span>Inicio</span>
				</a>				
			</li>
			<li>
				<a href="#">
					<i class="glyphicon glyphicon-tasks"></i>
					<span>Stocks</span>
				</a>
				<ul>
					<li>
						<a href="#" id="lista_pedido">
							<span>Lista de Pedidos</span>
						</a>
					</li>				
					<li>
						<a href="#" id="pedido">
							<span>Pedidos</span>
						</a>
					</li>
					<li>
						<a href="#" id="cancelar2">
							<span>Cancelar</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="">
				<a href="#" id="precio">
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
			<a href="#"><i class="entypo-baskete"></i>Orden de Compra</a>
		</li>
	</ol>
		<div class="row">
			<div class="col-xs-12">
				<div class="alert alert-danger"><strong>Importante!</strong>
					Esto es una orden de compra y solo tiene valides por 48 dias para poder liberar sus productos. Al no realizar el pago correspondiente en el tiempo estimado los productos regresaran de nuevo a los almacenes de Tremonti.</div>
			</div>
		</div>			
	<section>
		<div class="row">
		<div class="col-md-12">                                                  
			<div class="windows8" style="display:none;"><div class="wBall" id="wBall_1"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_2"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_3"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_4"><div class="wInnerBall"></div></div><div class="wBall" id="wBall_5"><div class="wInnerBall"></div></div></div>  <div id="success"></div><!-- Mensaje Bien o Error-->                                                                          
		</div> 				
		</div>
		<div id="invoice" class="invoice">
			<div class="row">								
				<div class="col-sm-6 invoice-left">										
					<a href="#">
						<img src="../../resOne/assets/img/profile.png" width="100px" class="img-circle"/>
					</a>											
				</div>



<?php
	require_once '../../php/funciones_db.php';

	$db = new funciones_BD();
	$query = "";
	$row = "";
	if($_SESSION["user_name"] != ""){ 
		$query = mysql_query("SELECT * FROM usuario U, orden_compra O, producto P, producto_orden PO WHERE U.cedula = O.cedula_cliente AND P.codigo_producto = PO.codigo_producto AND PO.orden_generada = 0");
		$num_rows_producto = mysql_num_rows($query); //numero de filas retornadas
		$array = array();	

		if($num_rows_producto >= 0){
			#$result_producto = mysql_fetch_array($queryProducto);
			while ($row = mysql_fetch_assoc($query)) {
				$array[] = $row	;
			}
		}
	}else{
		header("Location:/../session.php"); //Redirecionar a session
		//require_once("php/destroy_session.php");
	}

?>														
		<div class="col-sm-6 invoice-right">					
			<h3 id="orden_compra" value="<?php echo $array[0]['codigo_orden']; ?>">NO. <?php echo $array[0]['codigo_orden']; ?></h3>
					<span id="fecha">Fecha: <?php echo $array[0]['fecha_orden']; ?></span>
				</div>									
			</div>

			<hr class="margin" />
			<div class="row">									
				<div class="col-sm-5 invoice-left">									
					<h4>Cliente</h4>
					Nombre:<?php echo $array[0]['nombre']." ".$array[0]['apellido']; ?>						
					<br />
					Dirección:<?php echo $array[0]['direcion']; ?>
					<br />
					Cedula:<?php echo $array[0]['cedula_cliente']; ?>
					<br />
					Telefono:<?php echo $array[0]['telefono']; ?>															
				</div>								
										
				<div class="col-md-7 invoice-right">
										
					<h4>Detalles:</h4>
					<strong id="orden_compra_2">V.A.T Reg #:</strong> Trimonti C.A
					<br />
					<strong>Usuario:</strong> <?php echo $array[0]['username']; ?>
					<br />
					<strong>Codigo de Orden:</strong><?php echo $array[0]['codigo_orden']; ?>
											
				</div>
			</div>

			<div class="margin"></div>									
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Productos</th>
						<th>Presentación</th>
						<th>Cantidad</th>
						<th>Precio</th>
					</tr>
				</thead>										
				<tbody>
        			<?php	        			
        				$i = 0;
        				for ($i = 0; $i < count($array); $i++) {         								
        							
						?>
				    <tr>
						<td class="text-center"><?php echo $array[$i]['nombre_producto']; ?></td>				
						<td class="text-center"><?php echo $array[$i]['presentacion']; ?></td>			
						<td class="text-center"><?php echo $array[$i]['cantidad_caja']; ?></td>	
						<td class="text-center"><?php echo $array[$i]['total_producto']. ' Bs'; ?></td>	
					</tr>																

					<?php 									
						}
					 ?>								
				</tbody>
			</table>
									
			<div class="margin"></div>
			<div class="row">							
				<div class="col-sm-6">										
					<div class="invoice-left">									
						Calle Miranda
						<br />
						Sector Las Vegas, San Juan Bautista
						<br />
						Mnicipio Díaz,
						<br />
						Nueva Esparta. Venezuela.
						<br />						
					</div>										
				</div>
										
				<div class="col-sm-6">											
					<div class="invoice-right">											
						<ul class="list-unstyled">
							<li>
								Sub - Total: 
								<strong id="sub_monto"><?php echo $array[0]['monto'].' Bs'; ?></strong>
							</li>
							<li>
								Descuento: 
								-----
							</li>
							<li>
								Total:
								<strong id="total"><?php echo $array[0]['monto'].' Bs'; ?></strong>
							</li>
						</ul>
												
						<br />
										

						<a id="pagar" href="javascript:$('#modal-1').modal('show', {backdrop: 'static'});" class="btn btn-blue btn-icon icon-left hidden-print">
							Pagar
							<i class="entypo-credit-card"></i>
						</a>

						&nbsp;												
						<a href="javascript:window.print();" class="btn btn-primary btn-icon icon-left hidden-print">
							Imprimir
							<i class="entypo-doc-text"></i>
						</a>
												
						&nbsp;
												
						<a id="terminar" href="#" class="btn btn-success btn-icon icon-left hidden-print">
							Terminar Orden
							<i class="entypo-check"></i>
						</a>
					</div>											
				</div>									
			</div>
		</div><!-- Footer -->
								
	</section>



	<!-- Footer -->
	<footer class="main">

		&copy; 2015 <strong>Tremonti C.A.</strong> Website 2015.<a href="" target="_blank">Todos los derechos reservados.</a>
		
	</footer>	
</div>	
<!-- Modal 1 (Basic)-->
<div class="modal fade" id="modal-1">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Basic Modal</h4>
			</div>
			
			<div class="modal-body">
				Hello I am a Modal!
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-info">Pagar</button>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	
(function($, window, undefined){
	"use strict";
	$(document).ready(function(e){
		$("#inicio, #precio, #lista_pedido, #pedido, #cancelar2").click(function(){
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
					toastr.info("Importante! Primero tiene que terminar o cancelar el pedido.", opts);
					}, 0);
		});

		$("#terminar").click(function(){
			var orden_compra = $("#orden_compra").attr('value');		
			$.ajax({
				async:false,
	            url:"../../php/terminar_orden.php",
	            type:"POST",
	            data:{
	            	orden_compra:orden_compra
	            },
	      		dataType:"JSON",             
	            cache:true,
	            success:function(data){
	            	console.log(data);
	            	if(parseInt(data) == 1){
	            		setTimeout("window.location.href = 'cliente.php'", 600);
	            	}
	            },
				error:function (xhr, ajaxOptions, thrownError){
	    			if(xhr.status == 404 || thrownError == 'Not Found') {    
	    				notification2("Ocurrio un error!");    			
	        			setTimeout("window.location.href = '404.html'", 600);
	        			console.log('404'); 
	    			}
				},
				complete:function(jqXHR, estado){
					console.log("complete: "+estado);	
					//setTimeout("window.location.href = 'orden.php'", 600);
				}					
			});	
				
		});

		$("#cancelar").click(function(){
			var orden_compra = $("#orden_compra").attr('value');		
			$.ajax({
				async:false,
	            url:"../../php/terminar_orden.php",
	            type:"POST",
	            data:{
	            	orden_compra:orden_compra
	            },
	      		dataType:"JSON",             
	            cache:true,
	            success:function(data){
	            	console.log(data);
	            	if(parseInt(data) == 1){
	            		setTimeout("window.location.href = 'cliente.php'", 600);
	            	}
	            },
				error:function (xhr, ajaxOptions, thrownError){
	    			if(xhr.status == 404 || thrownError == 'Not Found') {    
	    				notification2("Ocurrio un error!");    			
	        			setTimeout("window.location.href = '404.html'", 600);
	        			console.log('404'); 
	    			}
				},
				complete:function(jqXHR, estado){
					console.log("complete: "+estado);	
					//setTimeout("window.location.href = 'orden.php'", 600);
				}					
			});	
				
		});
	});//End $(document).ready(function(){
})(jQuery, window);//end ($,window,undefined)	


</script>
	<link rel="stylesheet" href="/../assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="/../assets/js/rickshaw/rickshaw.min.css">

	<!-- Custom -->
	<script src="/../custom_assets/js/custom_produccion.js"></script>
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