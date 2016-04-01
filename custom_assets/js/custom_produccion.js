(function($, window, undefined){
	"use strict";
	$(document).ready(function(e){//main

		var password = "";
		var passServer = "";
		var presentacion1 = 0; 
		var presentacion2 = 0; 
		var presentacion3 = 0; 
		var presentacion4 = 0; 
		var presentacion5 = 0; 				

		var cantidad1 = 0;
		var cantidad2 = 0;
		var cantidad3 = 0;
		var cantidad4 = 0;
		var cantidad5 = 0;

		var codigo1 = 0;
		var codigo2 = 0;
		var codigo3 = 0;		
		var codigo4 = 0;		
		var codigo5 = 0;		

		var disponlibles1 = 0;
		var disponlibles2 = 0;
		var disponlibles3 = 0;
		var disponlibles4 = 0;
		var disponlibles5 = 0;								

		var nombre = "";
		var apellido = "";
		var cedula = "";		
		var username = "";
		var pass = "";
		var email = "";
		var rol = "";
		var telefono = "";
		var direccion = "";

		var click1 = 0;
		var click2 = 0;
		var click3 = 0;
		var click4 = 0;
		var click5 = 0;

		var total1 = 0;
		var total2 = 0;
		var total3 = 0;
		var total4 = 0;
		var total5 = 0;								

		var city = "";
		var zip = "";
		var municipio = "";

		$.ajax({
			async:false,
            url:"../../php/perfil.php",
            type:"POST",
      		dataType:"JSON",             
            cache:false,
			success:function(data){
				console.log("data"+ data[0]);
				nombre = data[0];
				apellido = data[1];
				cedula = data[2];
				rol = data[4];
				direccion = data[6];
				telefono = data[7];
				username = data[8];
				pass = data[9];
				email = data[10];
				passServer = pass;
				$("#nombre").val(nombre).prop("disabled",true);
				$("#apellido").val(apellido).prop("disabled",true);
				$("#cedula").val(cedula).prop("disabled",true);
				$("#usuario").val(username).prop("disabled",true);
				$("#direccion").val(direccion).prop("disabled",true);
				$("#telefono").val(telefono).prop("disabled",true);
			},
			error:function (xhr, ajaxOptions, thrownError){
    			if(xhr.status == 404 || thrownError == 'Not Found') {        			
        			setTimeout("window.location.href = '404.html'", 600);
        			console.log('404'); 
    			}
			}					
		});

		$.ajax({
			type:"POST",
			url:"../../php/productos_pedidos.php",
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
  			success: function (data){
				console.debug('Respuesta Ajax ' + data[1].codigo_producto);
				if(data != null){
					$(".windows8").hide();	

					if(data[0].codigo_producto == 1){
						presentacion1 = data[0].precio_caja;
						codigo1 = data[0].codigo_producto;
						$("#nombre_1").val(data[0].nombre_producto).prop("disabled",true);
						$("#presentacion_1").val(data[0].presentacion).prop("disabled",true);
					}

					if(data[1].codigo_producto == 2){
						presentacion2 = data[1].precio_caja;
						codigo2 = data[1].codigo_producto;						
						$("#nombre_2").val(data[1].nombre_producto).prop("disabled",true);
						$("#presentacion_2").val(data[1].presentacion).prop("disabled",true);
					}

					if(data[2].codigo_producto == 3){
						presentacion3 = data[2].precio_caja;
						codigo3 = data[2].codigo_producto;						
						$("#nombre_3").val(data[2].nombre_producto).prop("disabled",true);
						$("#presentacion_3").val(data[2].presentacion).prop("disabled",true);
					}

					if(data[3].codigo_producto == 4){
						presentacion4 = data[3].precio_caja;
						codigo4 = data[3].codigo_producto;						
						$("#nombre_4").val(data[3].nombre_producto).prop("disabled",true);
						$("#presentacion_4").val(data[3].presentacion).prop("disabled",true);
					}
						
					if(data[4].codigo_producto == 5){
						presentacion5 = data[4].precio_caja;
						codigo5 = data[4].codigo_producto;						
						$("#nombre_5").val(data[4].nombre_producto).prop("disabled",true);
						$("#presentacion_5").val(data[4].presentacion).prop("disabled",true);
					}
				}
			}  			
		});//fin ajax

		$("#aceptar_1").click(function(){
			click1 = 1;
			console.debug(click1);
			cantidad1 = parseInt($("#select_1").val());
			//total = cantidad * presentacion;
			console.log('#aceptar_1,function');
			if(cantidad1 == 0){
				$("#stock_1").text("No permitido");
			}else{
				inStock(codigo1);
			}
		});

		$("#aceptar_2").click(function(){
			click2 = 1;			
			cantidad2 = parseInt($("#select_2").val());
			console.log('#aceptar_1,function');
			if(cantidad2 == 0){
				$("#stock_2").text("No permitido");
			}else{
				inStock(codigo2);
			}
		});

		$("#aceptar_3").click(function(){
			cantidad3 = parseInt($("#select_3").val());
			console.log('#aceptar_1,function');
			click3 = 1;
			if(cantidad3 == 0){
				$("#stock_3").text("No permitido");
			}else{
				inStock(codigo3);
			}			
		});

		$("#aceptar_4").click(function(){
			click4 = 1;			
			cantidad4 = parseInt($("#select_4").val());
			console.log('#aceptar_1,function');
			if(cantidad4 == 0){
				$("#stock_4").text("No permitido");
			}else{
				inStock(codigo4);
			}			
		});

		$("#aceptar_5").click(function(){
			cantidad5 = parseInt($("#select_5").val());
			console.log('#aceptar_1,function');
			click5 = 1;			
			if(cantidad5 == 0){
				$("#stock_5").text("No permitido");
			}else{
				inStock(codigo5);
			}			
		});		

		function inStock(codigo_producto){
		$.ajax({
			type:"POST",
			url:"../../php/inStock.php",
			cache:true,
			dataType:"JSON",
			data:{codigo_producto:codigo_producto},			
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
  			success: function (data){
				console.debug('Respuesta Ajax ' + data[0].codigo_producto);
				if(data != null){
					$(".windows8").hide();	
					if(data[0].codigo_producto == 1){
						disponlibles1 = data[0].caja_disponibles;
						if(cantidad1 < disponlibles1){							
							$("#stock_1").text("Disponlibles");
							click1 = 1;
						}else{
							$("#stock_1").text("No Disponlibles");
							click1 = 0;							
						}								
					}else{
						if(data[0].codigo_producto == 2){
							disponlibles2 = data[0].caja_disponibles;
							if(cantidad2 < disponlibles2){
								$("#stock_2").text("Disponlibles");
								click2 = 1;
							}else{
								$("#stock_2").text("No Disponlibles");
								click2 = 0;
							}															
						}else{
							if(data[0].codigo_producto == 3){
								disponlibles3 = data[0].caja_disponibles;
								if(cantidad3 < disponlibles3){
									$("#stock_3").text("Disponlibles");
									click3 = 1;
								}else{
									$("#stock_3").text("No Disponlibles");
									click3 = 0;									
								}									
							}else{
								if(data[0].codigo_producto == 4){
									disponlibles4 = data[0].caja_disponibles;
									if(cantidad4 < disponlibles4){
										$("#stock_4").text("Disponlibles");
										click4 = 1;
									}else{
										$("#stock_4").text("No Disponlibles");
										click4 = 0;
									}										
								}else{
									if(data[0].codigo_producto == 5){
										disponlibles5 = data[0].caja_disponibles;
										if(cantidad5 < disponlibles5){
											$("#stock_5").text("Disponlibles");
											click5 = 1;
										}else{
											$("#stock_5").text("No Disponlibles");
											click5 = 0;
										}											
									}
								}
							}
						}
					}								
				}
			}  			
		});//fin ajax				
		}//end method

/**
		if( (click1 == 0) && (click2 == 0) && (click3 == 0) && (click4 == 0) && (click5 == 0) ){
			$("#void").show();
			$("#password").prop("disabled",true);
			$("#terminar_orden").prop("disabled",true);
		}else{
			$("#void").hide();
			$("#password").prop("disabled",false);
			$("#terminar_orden").prop("disabled",false);			
		}
*/
		$("#terminar_orden").click(function(event ) {
			event.preventDefault();
			pass = $("#password").val();
			city = $("#city").val();
			zip  = $("#zip").val();
			municipio = $("#municipio").val();

			console.log(pass+" "+passServer);
			if(pass == passServer){
				//setTimeout("window.location.href = 'orden.php'", 600);
				if(city == "" || zip == ""){
					notification("No a registrado la Ciudad y el Codigo Postal. Regrese al paso 2");					
				}else{
					addOrden();
				}
			}else{
				notification2("Contraseña incorrecta.");
			}
			return false;
		});


		function addOrden(){
			var dataArray = new Array();
			if(click1 == 1 && cantidad1 > 0){
				console.log("Cantidad: "+cantidad1+", "+ "Codigo:"+codigo1);
				dataArray[0] = cantidad1;
				dataArray[1] = codigo1;
				total1 = presentacion1 * cantidad1;
				dataArray[2] = total1;
			}

			if(click2 == 1 && cantidad2 > 0){
				console.log("Cantidad: "+cantidad2+", "+ "Codigo:"+codigo2);
				dataArray[3] = cantidad2;
				dataArray[4] = codigo2;				
				total2 = presentacion2 * cantidad2;
				dataArray[5] = total2;
			}

			if(click3 == 1 && cantidad3 > 0){
				console.log("Cantidad: "+cantidad3+", "+ "Codigo:"+codigo3);
				dataArray[6] = cantidad3;
				dataArray[7] = codigo3;				
				total3 = presentacion3 * cantidad3;
				dataArray[8] = total3;
			}

			if(click4 == 1 && cantidad4 > 0){
				console.log("Cantidad: "+cantidad4+", "+ "Codigo:"+codigo4);
				dataArray[9] = cantidad4;
				dataArray[10] = codigo4;				
				total4 = presentacion4 * cantidad4;
				dataArray[11] = total4;
			}

			if(click5 == 1 && cantidad5 > 0){
				console.log("Cantidad: "+cantidad5+", "+ "Codigo:"+codigo5);
				dataArray[12] = cantidad5;
				dataArray[13] = codigo5;				
				total5 = presentacion5 * cantidad5;
				dataArray[14] = total5;
			}						
			var arv = dataArray.toString();
			var json = JSON.stringify(arv);

			if(json == null || json == "[]"){
				notification("No ha pedido productos. Regrese al paso 3 y pidas sus productos.");
			}else{
				addOrdenDB(json);
			}
		}//end method

		function notification(mensaje){
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
					toastr.info(mensaje, opts);
					}, 0);
				//"No ha pedido productos. Regrese al paso 3 y pidas sus productos."
		}

		function notification2(mensaje){
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
					toastr.error(mensaje, opts);
					}, 0);
				//"No ha pedido productos. Regrese al paso 3 y pidas sus productos."
		}

		function addOrdenDB(json_1){
			console.debug("addOrdenDB");
			console.debug(json_1);
			$.ajax({
				async:false,
	            url:"../../php/add_orden.php",
	            type:"POST",
	            data:{
	            	json:json_1,
	            	city:city,
	            	zip:zip,
	            	municipio:municipio
	            },
	      		dataType:"JSON",             
	            cache:true,
				error:function (xhr, ajaxOptions, thrownError){
	    			if(xhr.status == 404 || thrownError == 'Not Found') {    
	    				notification2("Ocurrio un error!");    			
	        			setTimeout("window.location.href = '404.html'", 600);
	        			console.log('404'); 
	    			}
				},
				complete:function(jqXHR, estado){
					console.log("complete: "+estado);	
					setTimeout("window.location.href = 'orden.php'", 600);
				}					
			});			
		}//end function

		var pathname = window.location.pathname;
		if(pathname.toString == "http://localhost:8080/roles/usuario/orden.php" || pathname.toString == "roles/usuario/orden.php"){
			alert("Estoy en orden")
		}

		function showOrden(){

		}


	});//End $(document).ready(function()
})(jQuery, window);