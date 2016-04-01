/**
 *	Neon Login Script
 *
 *	Developed by Arlind Nushi - www.laborator.co
 */

var neonLogin = neonLogin || {};

(function($, window, undefined){
	"use strict";
	$(document).ready(function(){//main
		$("#form_registrar").trigger("reset"); //Borrar Campos/Mandar Mensaje/Enviar a login			
		var nombre = "";
		var telefono = "";
		var apellido = "";
		var email = "";
		var direccion = "";
		var username = "";
		var cedula = "";
		var password = "";
		var rol = "";		
		var rol2 = "";	
		var general;

		$("#registrar").click(function(){			
			nombre = $("#nombre").val();
			apellido = $("#apellido").val();
			telefono = $("#telefono").val();
			cedula = $("#cedula").val();
			email = $("#email").val();
			username = $("#username").val();
			password = $("#password").val();
			direccion = $("#direccion").val();
			rol = $("#select_rol").val();					
			console.log(rol);
			if(rol == "Administrador"){				
				register(telefono,nombre,apellido,cedula,direccion,"Administrador",email,username,password);
			}else{
				if(rol == "Cliente"){
					register(telefono,nombre,apellido,cedula,direccion,"Cliente",email,username,password);
				}else{
					if(rol == "Chofer"){file:///C:/Users/Roger/Downloads/Algoritmos_estructuras_de_datos_y_progra.enw
						register(telefono,nombre,apellido,cedula,direccion,"Chofer",email,username,password);
					}else{
						if(rol == "Secretaria"){
							register(telefono,nombre,apellido,cedula,direccion,"Secretaria",email,username,password);
						}
					}
				}
			}							
		});

	function register(telefono, nombre, apellido, cedula, direccion, rol, email, username, password){
			console.log("Register");
			$.ajax({
			beforeSend: function(){		
				$(".windows88").show();						
				$("#registrar").toggle(); //Ani8macion de ocultar los botones
				$("#telefono").prop("disabled",true);
				$("#nombre").prop("disabled",true);
				$("#direccion").prop("disabled",true);
				$("#apellido").prop("disabled",true);
				$("#cedula").prop("disabled",true);
				$("#email").prop("disabled",true)
				$("#username").prop("disabled",true);
				$("#password").prop("disabled",true);
			},
			async:false,
           	url: "../../php/register_admin.php",
            type: "POST",
            data: {
            	nombre:nombre,
            	apellido:apellido,
            	cedula:cedula,
            	direccion:direccion,
            	email:email,
            	rol:rol,
            	telefono:telefono,
            	username: username,
            	password:password
            },
			statusCode: {
    			404: function() {
    				setTimeout("window.location.href = '../../404.php'", 10000);
    			},
    			500: function() {
    				setTimeout("window.location.href = '../../500.php'", 600);
    			}
  			},             
            cache:true,
			success:function(resp){
				console.log("Register :"+resp);					
				if (resp == 1) {
					$(".windows88").hide();	
					$('#form_registrar').trigger("reset"); //Borrar Campos/Mandar Mensaje/Enviar a login						
					$("#telefono").prop("disabled",false);					
					$("#nombre").prop("disabled",false);
					$("#apellido").prop("disabled",false);
					$("#cedula").prop("disabled",false);
					$("#email").prop("disabled",false)
					$("#direccion").prop("disabled",false);
					$("#username").prop("disabled",false);
					$("#password").prop("disabled",false);
					$("#registrar").toggle("showOrHide");	
					reset();				
					$('#success').html("<div class='alert alert-success text-center'><strong></strong>Almacenado correctamente.</div>");					
					//setTimeout("window.location.href = 'session.php'", 600);					
				}else{
					if (resp == 0) {
						$(".windows88").hide();						
						$('#success').html("<div class='alert alert-danger text-center'><strong></strong>Lo sentimo susedio un error no pudo ser registrado.</div>");
						$("#registrar").toggle("showOrHide");
						//$("#form_registrar").trigger("reset"); //Borrar Campos/Mandar Mensaje/Enviar a login									
						//setTimeout("window.location.href = 'index.php'", 1000);
						reset();						
 						window.setTimeout('location.reload()', 1000); //Reloads after three seconds						
						//actualizar();
					}else{
						if(resp == -1){
							reset();							
							$(".windows88").hide();						
							$('#success').html("<div class='alert alert-danger text-center'><strong></strong>Ah ocurrido un problema.</div>");
							$("#registrar").toggle("showOrHide");
							window.setTimeout('location.reload()', 1000); //Reloads after three seconds								
						}
					}
				}
			},
			error:function(jqXHR, estado, error){
				console.log("error"+estado);
				console.log("error"+error);
			},
			complete:function(jqXHR, estado){
				console.log("complete"+estado);
			}
		});
			event.preventDefault();	
		return false;
	}//ene mthod

		//Obetener el valor del email
		$("#email").keyup(function(){
			email = $(this).val();
			console.log('Valor de cedula entrada:'+email);
		});
		$("#username").keyup(function(){
			username = $(this).val();
			console.log('Valor de username entrada:'+username);
		});		
		$("#cedula").keyup(function(){
			cedula = $(this).val();
			console.log('Valor de cedula entrada:'+cedula);
		});	

		$(".entypo-arrows-ccw").click(function(){
			$(".form-horizontal").reset();
 			$("textarea .form-control #direccion").val('');			
		});


/** Email validar econ ajax**/
		$("#email").change(function(){			
			if( email != "" && email.length > 0){
				console.log('email != ""'+ email);
				$.ajax({
					type:"POST",
					url:"../../php/validate/validateEmail.php",
					data:{email:email},
					cache:true,
					beforeSend: function(){
						$("#form_email #fountainG").show();	
						$("#email").prop("disabled",false);			
					},
					error: function(){
						setTimeout("window.location.href = '../../500.php'", 600);						
					},
					statusCode: {
    					404: function() {
    						setTimeout("window.location.href = '../../404.php'", 600);
    					},
    					500: function() {
    						setTimeout("window.location.href = '../../500.php'", 600);
    					}
  					},
  					success: function (dato){
						console.debug('dato ' + dato);
						if(dato == 1){
							console.debug('success: ' + dato);
							$("#form_email #fountainG").hide();
							$("#msj_error_email").addClass('label label-secondary').text('Dirección de correo electronico esta registrado').delay(500).fadeIn("slow");
							$("#email").val('');
							$("#form_email").addClass('form-group has-error ');
						}else{
							$("#form_email #fountainG").hide();
							console.debug('dato == 0' + dato + 'Bien');
						}
					}
				});
				return false;
			}
		});

		$("#email").keydown(function(e){
			email = $(this).val();
			console.log(e.toString());
			if( $("#email").is(":focus") || e.keyCode == 8 || email == "" || email.length == 0){
				$("#msj_error_email").empty();
				$("#form_email").removeClass('has-error ');			
			}
		});

		$("#nombre #cedula #apellido #telefono").keydown(function(e){
			console.log(e.toString());
			if($("#nombre #cedula #apellido #telefono").is(":focus") || e.keyCode == 8 || email == "" || email.length == 0){
				$("#success").empty();
			}
		});		
/** Email validar econ ajax**/


/** Username validar econ ajax**/

		$("#username").change(function(){			
			if( username != "" && username.length > 0){
				console.log('username != "":'+ username);
				$.ajax({
					type:"POST",
					url:"../../php/validate/validateUser.php",
					data:{username:username},
					cache:false,
					beforeSend: function(){
						$("#username").prop("disabled",false);
						$("#form_user #fountainG").show();
					},
					error: function(){
						setTimeout("window.location.href = '../../500.php'", 600);
					},
					statusCode: {
    					404: function() {
    						setTimeout("window.location.href = '404.php'", 600);
    					}
  					},
  					success: function (dato){
						console.debug('username: '+dato);
						if(dato == 1){
							$("#form_user #fountainG").hide();			
							$("#msj_error_username").addClass('label label-secondary').text('Nombre de usuario esta registrado').delay(500).fadeIn("slow");
							$("#username").val('');
							$("#form_username").addClass('has-error');
						}else{
							$("#form_user #fountainG").hide();			
						}
					}
				});
				return false;
			}
		});


		$("#username").keydown(function(e){
			cedula = $(this).val();
			console.log(e.toString());
			if( $("#username").is(":focus") || e.keyCode == 8 || username == "" || username.length == 0){
				$("#msj_error_username").empty();
				$("#form_username").removeClass('has-error');			
			}
		});
/** Username validar econ ajax**/


/** Cedula validar econ ajax**/
		$("#cedula").change(function(){
			
			if( cedula != "" && cedula.length > 0){
				console.log('cedula != "":'+ cedula);
				$.ajax({
					type:"POST",
					url:"../../php/validate/validateCedula.php",
					data:{cedula:cedula},
					cache:false,
					beforeSend: function(){
						$("#form_cedula #fountainG").show()
						$("#cedula").prop("disabled",false);			
					},
					error: function(){
						setTimeout("window.location.href = '../../500.php'", 600);
					},
					statusCode: {
    					404: function() {
    						setTimeout("window.location.href = '../../404.php'", 600);
    					},
    					500: function() {
    						setTimeout("window.location.href = '../../500.php'", 600);
    					}
  					},
  					success: function (dato){
						console.debug('cedula: '+dato);
						if(dato == 1){
							$("#msj_error_cedula").addClass('label label-secondary').text('Cedula esta registrada');
							$("#cedula").val('');
							$("#form_cedula").addClass('form-group has-error ');
							$("#form_cedula #fountainG").hide();
						}else{
							$("#form_cedula #fountainG").hide();
						}
					}
				});
				return false;
			}
		});
		$("#cedula").keydown(function(e){
			cedula = $(this).val();
			console.log(e.toString());
			if( $("#cedula").is(":focus") || e.keyCode == 8 || username == "" || username.length == 0){
				$("#msj_error_cedula").empty();
				$("#form_cedula").removeClass('has-error ');
			}
		});


		$("#direccion").change(function(){		
			direccion = $(this).val();	
			if(direccion == "" || direccion.length == 0){
				console.log('direccion == "":'+ direccion);
				$("#msj_error_direccion").addClass('label label-secondary').text('La dirección no puede ir vacia').delay(500).fadeIn("slow");
				$("#direccion").addClass('has-error ');
				return false;
			}
		});		

		function reset(){
			$('#form_registrar').each(function(){
	  			this.reset();
			});			
		}
	});//End $(document).ready(function()
})(jQuery, window);