(function($, window, undefined){
	"use strict";
	$(document).ready(function(e){//main	
		var cajas = "";
		var tipo_producto = "";
		var	presentacion = "";
		var fecha = "";
		var fecha_nueva = "";
		var cantidad_unidad = 0;

		$("#cajas").keyup(function(){
			cajas = $(this).val();
			console.log('Valor d e nombre entrada:' +cajas);
		});		
		$("#tipo_producto").keyup(function(){
			tipo_producto = $(this).val();
			console.log('Valor d e tipo_producto entrada:' +tipo_producto);
		});		
		$("#fecha").keyup(function(){
			fecha = $(this).val();
			console.log('Valor d e tipo_producto entrada:' +tipo_producto);
		});			

		$("#presentacion").chained("#tipo_producto");
			function reset(){
			$('#form_registrar').each(function(){
	  			this.reset();
			});			
		}	//end method

		$("#registrar").click(function(){
			//var 
			cajas = $("#cajas").val();
			tipo_producto = $("#tipo_producto").val();
			presentacion = $("#presentacion").val();			
			fecha = $("#fecha").val();

			if(cajas != "" && fecha != ""){	
				var res = fecha.split("/"); 
				fecha_nueva = res[2]+"-"+res[1]+"-"+res[0];

				if(presentacion == "330 ml"){
					cantidad_unidad = parseInt(cajas) *24;
					register(cajas, cantidad_unidad, fecha_nueva, 1);	
				}else{
					if(presentacion == "500 ml"){
						cantidad_unidad = parseInt(cajas) *24;
						register(cajas, cantidad_unidad, fecha_nueva, 2);										
					}else{
						if(presentacion == "600 ml"){
							cantidad_unidad = parseInt(cajas) *24;
							register(cajas, cantidad_unidad, fecha_nueva, 3);
						}else{
							if(presentacion == "1500 ml"){
								cantidad_unidad = parseInt(cajas) *12;
								register(cajas, cantidad_unidad, fecha_nueva, 4);
							}else{
								if(presentacion == "5000 ml"){
									cantidad_unidad = parseInt(cajas) *4;
									register(cajas, cantidad_unidad, fecha_nueva, 5);
								}
							}
						}
					}
				}				
			}else{
				console.log("Nombre esta vacio");
			}			
			
		});

		function register(cajas, cantidad_unidad, fecha_nueva, codigo){
			console.debug("Register: " + cajas + ", " + cantidad_unidad + ", Fecha:" + fecha_nueva);
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
	           	url: "../../../php/produccion.php",
	            type: "POST",
	            data: {
	            	cajas:cajas,
	            	cantidad_unidad:cantidad_unidad,
	            	fecha_nueva:fecha_nueva,
	            	codigo:codigo
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
					console.debug("Register productos :"+ resp);					
					if (resp == 1) {
						$(".windows88").hide();	
						$('#form_registrar').trigger("reset"); //Borrar Campos/Mandar Mensaje/Enviar a login						
						$("#cajas").prop("disabled",false);
						$("#fecha").prop("disabled",false);
						reset();				
						setTimeout("window.location.href = 'agregar.php'", 1000);																			
						$('#success').html("<div class='alert alert-success text-center'><strong></strong>Almacenado correctamente.</div>");											
					}else{
						if (resp == 0) {
							$(".windows88").hide();						
							$('#success').html("<div class='alert alert-danger text-center'><strong></strong>Lo sentimo susedio un error no pudo ser registrado.</div>");
							//reset();						
	 						//window.setTimeout('location.reload()', 1000); //Reloads after three seconds						
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
	});//End $(document).ready(function()
})(jQuery, window);