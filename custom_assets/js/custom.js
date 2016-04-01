(function($,window,undefined){
	
	$(document).ready(function(e){
		$("#form_registrar").trigger("reset"); //Borrar Campos/Mandar Mensaje/Enviar a login			
		//Var
		var email = "";
		var direccion = "";
		var username = "";
		var cedula = "";
		var password = "";
		var password2 = "";
		var telefono = "";

		password = $('[name=password]');
		password2 = $('[name=passwordConfirmar]');

		function coincidePassword(){//verificar las contraseñas
			var pass1 = password.val();
			var pass2 = password2.val();

			console.debug("Pass1: "+pass1 + " Pass2: "+pass2);

			if(pass1 != pass2){
				$("#msj_error_pass_confirmar").addClass('label label-info').text('No coinciden las contraseñas').delay(500).fadeIn("slow");
				$("#form_pass_confirmar").addClass('form-group has-error ');	

			}else{
				if (pass1 == pass2) {
					$("#msj_error_pass_confirmar").addClass('label label-info').text('Coinciden las contraseñas').delay(500).fadeIn("slow");
					registrar();
				}		
			}
		}//end method

		password2.keyup(function(){
			coincidePassword();
		});

		password.keyup(function(){
			coincidePassword();
		});		
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

		/** Cedula validar econ ajax**/
		$("#cedula").change(function(){			
			if(cedula != "" && cedula.length > 0){
				console.log('cedula != "":'+ cedula);
				$.ajax({
					type:"POST",
					url:"php/validate/validateCedula.php",
					data:{cedula:cedula},
					cache:true,
					beforeSend: function(){
						$("#fountainG").show();			
					},
					error: function(){
						//alert("Error En Segundo Plano");
						setTimeout("window.location.href = '500.php'", 600);
					},
					statusCode: {
    					404: function() {
    						setTimeout("window.location.href = '404.php'", 600);
    					},
    					500: function() {
    						setTimeout("window.location.href = '500.php'", 600);
    					}
  					},
  					success: function (dato){
						console.debug('cedula: '+dato);
						if(dato == 1){
							$("#fountainG").hide();
							$("#msj_error_cedula").addClass('label label-secondary').text('Cedula esta registrada');
							$("#cedula").val('');
							$("#form_cedula").addClass('form-group has-error');
							return false;
						}else{
							$("#fountainG").hide();
						}
					}
				});
				return false;
			}
		});//end cedula

		$("#cedula").keydown(function(e){
			cedula = $(this).val();
			console.log(e.toString());
			if( $("#cedula").is(":focus") || e.keyCode == 8 || username == "" || username.length == 0){
				$("#msj_error_cedula").empty();
				$("#form_cedula").removeClass('has-error ');
			}
		});

/** Username validar econ ajax**/
		$("#username").change(function(){			
			if( username != "" && username.length > 0){
				console.log('username != "":'+ username);
				$.ajax({
					type:"POST",
					url:"php/validate/validateUser.php",
					data:{username:username},
					cache:true,
					beforeSend: function(){
						$("#form_username #fountainG").show();			
					},
					error: function(){
						setTimeout("window.location.href = '500.php'", 600);
					},
					statusCode: {
    					404: function() {
    						setTimeout("window.location.href = '404.php'", 600);
    					},
    					500: function() {
    						setTimeout("window.location.href = '500.php'", 600);
    					}
  					},
  					success: function (dato){
						console.debug('username: '+dato);
						if(dato == 1){
							$("#form_username #fountainG").hide();
							$("#msj_error_username").addClass('label label-secondary').text('Nombre de usuario esta registrado').delay(500).fadeIn("slow");
							$("#username").val('');
							$("#form_username").addClass('has-error ');
							return false;
						}else{
							$("#form_username #fountainG").hide();
						}
					}
				});
				return false;
			}
		});//method usuario

		$("#username").keydown(function(e){
			cedula = $(this).val();
			console.log(e.toString());
			if( $("#username").is(":focus") || e.keyCode == 8 || username == "" || username.length == 0){
				$("#msj_error_username").empty();
				$("#form_username").removeClass('has-error');			
			}
		});

/** Email validar econ ajax**/
		$("#email").change(function(){			
			if( email != "" && email.length > 0){
				console.log('email != ""'+ email);
				$.ajax({
					type:"POST",
					url:"php/validate/validateEmail.php",
					data:{email:email},
					cache:false,
					beforeSend: function(){
						$("#form_email #fountainG").show();				
					},
					error: function(){
						setTimeout("window.location.href = '500.php'", 600);						
					},
					statusCode: {
    					404: function() {
    						setTimeout("window.location.href = '404.php'", 600);
    					},
    					500: function() {
    						setTimeout("window.location.href = '500.php'", 600);
    					}
  					},
  					success: function (dato){
						console.debug('dato == 1 ' + dato);
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
/** Email validar econ ajax**/
	/** Validaciones */


	function registrar(){
		$("#registrar").submit(function(event){
			//var
			var nombre = $("#nombre").val();
			var apellido = $("#apellido").val();
			var cedula = $("#cedula").val();
			var email = $("#email").val();
			var username = $("#username").val();
			var password = $("#password").val();
			var password2 = $("#passwordConfirmar").val();
			var direccion = $("#direccion").val();
			var telefono = $("#telefono").val();			
			event.preventDefault();
			if(telefono != "" && nombre != "" && apellido != "" && cedula != "" && email != "" && username != "" && password != "" && direccion != ""){
				register(nombre, apellido, telefono, cedula, direccion, email, username, password);	
			}else{
				$('#success').html("<div class='alert alert-success text-center'><strong></strong>Verifique sus datos.</div>");				
			}				
		});
	}//end method

		function register(nombre, apellido, telefono, cedula, direccion, email, username, password){
				console.log("Method Register");
				$.ajax({
				beforeSend: function(){					
					$("#btnregistrar, #btncancelar").toggle(); //Ani8macion de ocultar los botones
					$("#nombre").prop("disabled",true);
					$("#direccion").prop("disabled",true);
					$("#apellido").prop("disabled",true);
					$("#cedula").prop("disabled",true);
					$("#telefono").prop("disabled",true);
					$("#email").prop("disabled",true)
					$("#username").prop("disabled",true);
					$("#password").prop("disabled",true);
					$("#passwordConfirmar").prop("disabled",true);
					$(".windows88").show();
				},
				async:false,
				cache:true,
            	url: "php/register.php",
                type: "POST",
                data: {
                	nombre:nombre,
                	apellido:apellido,
                	cedula:cedula,
                	direccion:direccion,
                	email:email,
                	telefono:telefono,
                	username: username,
                	password:password
                },
				statusCode: {
    				404: function() {
    					setTimeout("window.location.href = '404.php'", 600);
    				},
    				500: function() {
    					setTimeout("window.location.href = '500.php'", 600);
    				}
  				},                
                cache:true,
				success:function(resp){
					console.deubg("Register: "+resp);
					if(parseInt(resp) == -1){
							console.debug("-1");
							$('#form_registrar').trigger("reset"); //Borrar Campos/Mandar Mensaje/Enviar a login										
							$("#nombre").prop("disabled",false);
							$("#apellido").prop("disabled",false);
							$("#cedula").prop("disabled",false);
							$("#email").prop("disabled",false);
							$("#telefono").prop("disabled",true);
							$("#direccion").prop("disabled",false);
							$("#username").prop("disabled",false);
							$("#password").prop("disabled",false);
							$("#passwordConfirmar").prop("disabled",false);	
							//$("#form_registrar").trigger("reset"); //Borrar Campos/Mandar Mensaje/Enviar a login							
							$('#success').html("<div class='alert alert-danger text-center'><strong></strong>Lo sentimo susedio un error no pudo ser registrado.</div>");
					}else{
						if(parseInt(resp) == 0){
							console.debug("0");
							$('#success').html("<div class='alert alert-danger text-center'><strong></strong>Lo sentimo susedio un error no pudo ser registrado.</div>");
							$("#btnregistrar,#btncancelar").toggle("showOrHide");
							//$("#form_registrar").trigger("reset"); //Borrar Campos/Mandar Mensaje/Enviar a login									
							setTimeout("window.location.href = 'index.php'", 1000);
							$(".windows88").hide();	
						}else{
							if(parseInt(resp) == 1){
								console.debug("1");
								$('#form_registrar').trigger("reset"); //Borrar Campos/Mandar Mensaje/Enviar a login										
								$("#nombre").prop("disabled",false);
								$("#apellido").prop("disabled",false);
								$("#cedula").prop("disabled",false);
								$("#email").prop("disabled",false);
								$("#telefono").prop("disabled",true);
								$("#direccion").prop("disabled",false);
								$("#username").prop("disabled",false);
								$("#password").prop("disabled",false);
								$("#passwordConfirmar").prop("disabled",false);	
								$("#form_registrar").trigger("reset"); //Borrar Campos/Mandar Mensaje/Enviar a login								
								$(".windows88").hide();	
								setTimeout("window.location.href = 'session.php'", 600);
							}
						}
					}
				},
				error:function(jqXHR, estado, error){
					console.log("error: "+estado);
					console.log("error_ "+error);
					setTimeout("window.location.href = '404.php'", 600);
				},
				complete:function(jqXHR, estado){
					console.log("complete: "+estado);
							$('#form_registrar').trigger("reset"); //Borrar Campos/Mandar Mensaje/Enviar a login										
							$("#nombre").prop("disabled",false);
							$("#apellido").prop("disabled",false);
							$("#cedula").prop("disabled",false);
							$("#email").prop("disabled",false);
							$("#telefono").prop("disabled",true);
							$("#direccion").prop("disabled",false);
							$("#username").prop("disabled",false);
							$("#password").prop("disabled",false);
							$("#passwordConfirmar").prop("disabled",false);	
							setTimeout("window.location.href = 'session.php'", 600);
					
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