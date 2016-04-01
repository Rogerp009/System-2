(function($, window, undefined){
	"use strict";
	$(document).ready(function(e){//main	
		var nombre = "";
		var tipo_producto = "";
		var	presentacion = "";
		var precio = "";
		var precio_caja = "";

		$("#nombre").keyup(function(){
			nombre = $(this).val();
			console.log('Valor d e nombre entrada:' +nombre);
		});		
		$("#tipo_producto").keyup(function(){
			tipo_producto = $(this).val();
			console.log('Valor d e tipo_producto entrada:' +tipo_producto);
		});		
		$("#precio").keyup(function(){
			tipo_producto = $(this).val();
			console.log('Valor d e tipo_producto entrada:' +tipo_producto);
		});			
		/**
		//validate nombre
		$("#nombre").change(function(){			
			console.debug("change "+ nombre);
			if(nombre != "" && nombre.length > 0){					
				console.log("Nombre entrada: " +nombre);
				$.ajax({	
					type:"POST",
					url:"../../../php/validate/validateNombre.php",
					data:{nombre:nombre},
					cache:true,
					error: function(){
						setTimeout("window.location.href = '../../../500.php'", 600);
					},
					statusCode: {
    					404: function() {
    						setTimeout("window.location.href = '../../../404.php'", 600);
    					},
    					500: function() {
    						setTimeout("window.location.href = '../../../500.php'", 600);
    					}
  					},
  					success: function (dato){
						console.debug('nombre: '+dato);
						if(dato == 1){
							$("#form_registrar #fountainG").hide();
							$("#error_nombre").addClass('label label-danger').text('El nombre de producto esta registrado').delay(500).fadeIn("slow");
							$("#nombre").val('');
							$("#form_registrar").addClass('has-error');
							return false;
						}else{
							$("#form_registrar #fountainG").hide();
						}  	
					}														
				});//fin ajax				
			}//end if			
		});//method nombre	
		*/
		
		$("#precio").change(function(){
			console.log("Precio");
		});

		$("#presentacion").chained("#tipo_producto");
			function reset(){
			$('#form_registrar').each(function(){
	  			this.reset();
			});			
		}	//end method

		$("#registrar").click(function(){			
			nombre = $("#nombre").val();
			tipo_producto = $("#tipo_producto").val();
			presentacion = $("#presentacion").val();			
			precio = $("#precio").val();
			if(nombre != "" && precio != ""){
				if(presentacion == "330 ml"){
					register(nombre, tipo_producto, presentacion, precio, parseFloat(precio)*24);	
				}else{
					if(presentacion == "500 ml"){
						precio_caja = parseFloat(precio)*24;
						register(nombre, tipo_producto, presentacion, precio, parseFloat(precio)*24);												
					}else{
						if(presentacion == "500 ml"){
							register(nombre, tipo_producto, presentacion, precio, parseFloat(precio)*24);
						}else{
							if(presentacion == "600 ml"){
								register(nombre, tipo_producto, presentacion, precio, parseFloat(precio)*24);
							}else{
								if(presentacion == "1500 ml"){
									register(nombre, tipo_producto, presentacion, precio, parseFloat(precio)*12);
								}else{
									if(presentacion == "5000 ml"){
										register(nombre, tipo_producto, presentacion, precio, parseFloat(precio)*4);
									}
								}
							}
						}
					}
				}				
			}else{
				console.log("Nombre esta vacio");
			}			
		});

		function register(nombre, tipo_producto, presentacion, precio, precio_caja){
			console.debug("Register: " + nombre + ", " + tipo_producto + ", " + presentacion+", "+precio);
				$.ajax({
				beforeSend: function(){		
					$(".windows88").show();						
					//$("#registrar").toggle(); //Ani8macion de ocultar los botones
					$("#nombre").prop("disabled",true);
					$("#tipo_producto").prop("disabled",true);
					$("#presentacion").prop("disabled",true);
					$("#precio").prop("disabled",true);
				},
				async:false,
	           	url: "../../../php/productos.php",
	            type: "POST",
	            data: {
	            	nombre:nombre,
	            	tipo_producto:tipo_producto,
	            	presentacion:presentacion,
	            	precio:precio,
	            	precio_caja:precio_caja
	            },
				statusCode: {
	    			404: function() {
	    				setTimeout("window.location.href = '../../../404.php'", 10000);
	    			},
	    			500: function() {
	    				setTimeout("window.location.href = '../../../500.php'", 600);
	    			}
	  			},             
	            cache:true,
				success:function(resp){
					console.debug("Register productos :"+resp);					
					if (resp == 1) {
						$(".windows88").hide();	
						$('#form_registrar').trigger("reset"); //Borrar Campos/Mandar Mensaje/Enviar a login						
						$("#nombre").prop("disabled",false);
						$("#tipo_producto").prop("disabled",false);
						$("#presentacion").prop("disabled",false);
						$("#precio").prop("disabled",false);
						reset();				
						setTimeout("window.location.href = 'agregar.php'", 1000);																			
						$('#success').html("<div class='alert alert-success text-center'><strong></strong>Almacenado correctamente.</div>");											
					}else{
						if (resp == 0) {
							$(".windows88").hide();						
							$('#success').html("<div class='alert alert-danger text-center'><strong></strong>Lo sentimo susedio un error no pudo ser registrado.</div>");
							reset();						
	 						window.setTimeout('location.reload()', 1000); //Reloads after three seconds						
						}else{
							if(resp == -1){
								reset();							
								$(".windows88").hide();						
								$('#success').html("<div class='alert alert-danger text-center'><strong></strong>Lo sentimo susedio un error no pudo ser registrado.</div>");
								window.setTimeout('location.reload()', 1000); //Reloads after three seconds								
							}
						}
					}
				},
				error:function(jqXHR, estado, error){
					console.log("error "+ estado);
					console.log("error "+ error);
				},
				complete:function(jqXHR, estado){
					console.log("complete "+ estado);
				}
			});	
			return false;

		}//end method
		return false;
		event.preventDefault();	

		$("#nombre").keydown(function(e){
			nombre = $(this).val();
			console.log(e.toString());
			if( $("#nombre").is(":focus") || e.keyCode == 8 || username == "" || username.length == 0){
				$("#success").empty();
				//$("#success").remove();
				$("#error_nombre").hide();
				$("#form_registrar").removeClass('has-error');
			}
		});
	});//End $(document).ready(function()
})(jQuery, window);