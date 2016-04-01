(function($,window,undefined){
	"use strict";
	$(document).ready(function(e){
		//Var
		var email = "";
		var direccion = "";
		var username = "";
		var cedula = "";
		var password = "";
		var password2 = "";

		password = $('[name=password]');
		password2 = $('[name=passwordConfirmar]');

		function coincidePassword(){
			var pass1 = password.val();
			var pass2 = password2.val();

			console.debug(pass1 + pass2);

			if(pass1 != pass2){
				$("#msj_error_pass_confirmar").addClass('label label-info').text('No coinciden las contraseñas').delay(500).fadeIn("slow");
				$("#form_pass_confirmar").addClass('form-group has-error ');	

			}else{
				if (pass1 == pass2) {
					$("#msj_error_pass_confirmar").addClass('label label-info').text('Coinciden las contraseñas').delay(500).fadeIn("slow");
					registrar();
				}		
			}
		}

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


/** Email validar econ ajax**/
		$("#email").change(function(){
			
			if( email != "" && email.length > 0){
				console.log('email != "":'+ email);
				$.ajax({
					type:"POST",
					url:"php/validate/validateEmail.php",
					data:{email:email},
					cache:false,
					beforeSend: function(){
						$("#email").prop("disabled",false);			
					},
					error: function(){
						alert("Error En Segundo Plano");
					},
					statusCode: {
    					404: function() {
      						alert( "page not found" );
    					}
  					},
  					success: function (dato){
						console.debug('email: '+dato);
						if(dato == 1){
							$("#msj_error_email").addClass('label label-secondary').text('Dirección de correo electronico esta registrado').delay(500).fadeIn("slow");
							$("#email").val('');
							$("#form_email").addClass('form-group has-error ');
							return false;
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
/** Email validar econ ajax**/


/** Username validar econ ajax**/

		$("#username").change(function(){			
			if( username != "" && username.length > 0){
				console.log('username != "":'+ username);
				$.ajax({
					type:"POST",
					url:"php/validate/validateUser.php",
					data:{username:username},
					cache:false,
					beforeSend: function(){
						$("#username").prop("disabled",false);			
					},
					error: function(){
						alert("Error En Segundo Plano");
					},
					statusCode: {
    					404: function() {
      						alert( "page not found" );
    					}
  					},
  					success: function (dato){
						console.debug('username: '+dato);
						if(dato == 1){
							$("#msj_error_username").addClass('label label-secondary').text('Nombre de usuario esta registrado').delay(500).fadeIn("slow");
							$("#username").val('');
							$("#form_username").addClass('has-error ');
							return false;
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
					url:"php/validate/validateCedula.php",
					data:{cedula:cedula},
					cache:false,
					beforeSend: function(){
						$("#cedula").prop("disabled",false);			
					},
					error: function(){
						alert("Error En Segundo Plano");
					},
					statusCode: {
    					404: function() {
      						alert( "page not found" );
    					}
  					},
  					success: function (dato){
						console.debug('cedula: '+dato);
						if(dato == 1){
							$("#msj_error_cedula").addClass('label label-secondary').text('Cedula esta registrada');
							$("#cedula").val('');
							$("#form_cedula").addClass('form-group has-error ');
							return false;
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
/** Cedula validar econ ajax**/

/** Validate direction*/
/** Username validar econ ajax**/

		$("#direccion").change(function(){			
			if( direccion == "" || direccion.length == 0){
				console.log('direccion == "":'+ direccion);
				$("#msj_error_direccion").addClass('label label-secondary').text('La dirección no puede ir vacia').delay(500).fadeIn("slow");
				$("#direccion").addClass('has-error ');
				return false;
			}else{
				console.log('direccion != "":'+ direccion);
			}
		});


	password2.keyup(function(){
		coincidePassword();
	});

	function registrar(){
		//var
		var nombre = $("#nombre").val();
		var apellido = $("#apellido").val();
		var cedula = $("#cedula").val();
		var email = $("#email").val();
		var nameuser = $("#username").val();
		var password = $("#password").val();
		var direccion = $("#direccion").val();

		$("#registrar").submit(function(event){
			event.preventDefault();
			register(nombre,apellido,cedula,direccion,email,nameuser,password)
		});
	}

		function register(nombre,apellido,cedula,direccion,email,nameuser,password){
				console.log("Method");

				$.ajax({
				beforeSend: function(){					
					$(".center-loading").children().eq(1).addClass('loading-container').html('<div class="loading"></div><div id="loading-text">Cargando...</div>');
					$("#btnregistrar,#btncancelar").toggle(); //Ani8macion de ocultar los botones
					$("#nombre").prop("disabled",true);
					$("#direccion").prop("disabled",true);
					$("#apellido").prop("disabled",true);
					$("#cedula").prop("disabled",true);
					$("#username").prop("disabled",true);
					$("#password").prop("disabled",true);
					$("#passwordConfirmar").prop("disabled",true);

				},
				async:false,
            	url: "php/register.php",
                type: "POST",
                data: {
                	nombre:nombre,
                	apellido:apellido,
                	cedula:cedula,
                	direccion:direccion,
                	email:email,
                	username: nameuser,
                	password:password
                },
                cache:false,
				success:function(resp){
					console.log("Register :"+resp);
					
					if (resp == 1) {
						$('#form_registrar').trigger("reset"); //Borrar Campos/Mandar Mensaje/Enviar a login						
						$(".status").remove();					
						$("#nombre").prop("disabled",false);
						$("#apellido").prop("disabled",false);
						$("#cedula").prop("disabled",false);
						$("#username").prop("disabled",false);
						$("#password").prop("disabled",false);
						$("#passwordConfirmar").prop("disabled",false);	
						setTimeout("window.location.href = 'session.html'", 600);					
					}else{
						if (resp == 0) {
							$('#success').html("<div class='alert alert-success text-center'><strong></strong>Lo sentimo susedio un error no pudo ser registrado.</div>");
							$(".status").remove();
							$(".center-loading").remove();
							$("#btnregistrar,#btncancelar").toggle("showOrHide");
							actualizar();
						};
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
			return false;
		}

		$(document).keydown(function(e){
			if(e.keyCode == 116){
				$(":text").each(function(){	
					$($(this)).val('');
					$("#msj_error_email").empty();						
				});
			}
		});

	});//End $(document).ready(function(){
})(jQuery, window);//end ($,window,undefined)
						//$("#cedula").prop("disabled",false);