/**
 *	Neon Login Script
 *
 *	Developed by Arlind Nushi - www.laborator.co
 */

var neonLogin = neonLogin || {};

(function($, window, undefined){
	"use strict";
	$(document).ready(function(){

		//Cargar Datos para perfil
		var nombre = "";
		var apellido = "";
		var cedula = "";		
		var username = "";
		var pass = "";
		var email = "";
		var rol = "";
		var telefono = "";
		var direccion = "";
		var valor1  = $('[name=password]');
		var valor2 = $('[name=passwordConfirmar]');

		$.ajax({
			beforeSend: function(){					
				$(".center-loading").children().eq(1).addClass('loading-container').html('<div class="loading"></div><div id="loading-text">Cargando...</div>');
			},
			async:false,
            url:"../../php/perfil.php",
            type:"POST",
      		dataType:"JSON",             
            cache:false,
			success:function(data){
				console.log("data");
				nombre = data[0];
				apellido = data[1];
				cedula = data[2];
				rol = data[4];
				direccion = data[6];
				telefono = data[7];
				username = data[8];
				pass = data[9];
				email = data[10];

				$(".username").children().text(username);
				$("strong").children().eq(0).text("Bienvenido " + username);
				$(".center-loading").empty();

				//Aux Pasar caracteres a asterisco
				var aux = "";
				for (var i = 0; i < pass.length; i++) {
					aux+= '*';
				}

				$(".user-details").children().eq(0).children().children().eq(1).text(nombre).css('color','#A0A0A0');
				$(".user-details").children().eq(1).children().children().eq(1).text(apellido).css('color','#A0A0A0');
				$(".user-details").children().eq(2).children().children().eq(1).text(direccion).css('color','#A0A0A0');				
				$(".user-details").children().eq(3).children().children().eq(1).text(telefono).css('color','#A0A0A0');					
				$(".user-details").children().eq(4).children().children().eq(1).text(cedula).css('color','#A0A0A0');
				$(".user-details").children().eq(5).children().children().eq(1).text(email).css('color','#A0A0A0');
				$(".user-details").children().eq(6).children().children().eq(1).text(aux).css('color','#A0A0A0');

				$(".profile-name").children().eq(1).children().text(rol);

			},
			error:function (xhr, ajaxOptions, thrownError){
    			if(xhr.status == 404 || thrownError == 'Not Found') {        			
        			setTimeout("window.location.href = '404.html'", 600);
        			console.log('404'); 
    			}
			}					
		});
			/** ********************************** Email ********************************** */

	//Validate email
		$("#email").change(function(){
			var email = $("#email").val();	
			if (email != "" && email.length > 0) {
				validateEmail(email);
			};//End id email
		});	

		//Method
		function validateEmail(email){
				console.log('Email != "":'+ email);
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
						console.debug('validateEmail: '+dato);
						if(dato == 1){						
							$("#email").val('');
							$("#succes_error").show("slow");
							$("#guardar_email").hide("slow");
							console.debug("Error Email");				
						}else{
							$("#guardar_email").click(function(){ 
								updateEmail(email);
							});							
						}
					}
				});			
		}

		function updateEmail(email){

			$.ajax({
				beforeSend: function(){					
					$(".loanding").show();
					$("#email").prop("disabled", true);				
				},
				data:{email:email},
				async:false,
           		url:"../php/update_email.php",
           		type:"POST",           
           		cache:false,
				success:function(data){
					console.log("success:" +data);
					if(data == -1){
						console.log("-1:" +data);
						setTimeout("window.location.href = '../session.php'", 600);
					}else{
						if(data == 0){
							console.log("0:" +data);
							$("#warning_no_registrar").show("slow");
							$(".loanding").hide();
							$("#email").prop("disabled", false);
						}else{
							if(data == 1){
								console.log("1:" +data);
								$(".loanding").hide();
								$("#succes").show("slow");
								$("#guardar_email").hide("slow");
								console.debug("Agregado Email");

								$(".modal-footer #cerrar").click(function(){
		 							location.reload();
									//setTimeout("window.location.href = 'perfil.php'", 600);		 							
								});

								$(".modal-header .close").click(function(){
									location.reload();
		 							//setTimeout("window.location.href = 'perfil.php'", 600);
								});		
							}else{
								if(data == 2){
									console.log("2:" +data);
									setTimeout("window.location.href = '../session.php'", 600);
								}
							}
						}
					}
				},
				error:function (xhr, ajaxOptions, thrownError){
   					if(xhr.status == 404 || thrownError == 'Not Found') {        			
       					setTimeout("window.location.href = '404.html'", 600);
       					console.log('404'); 
   					}
				}			
			});	
			return false;
		}//End updateEmail

	//Borrar mensaje de error
	$("#email").keydown(function(e){
		email = $(this).val();
		console.log(e.toString());
		if( $("#email").is(":focus") || e.keyCode == 8 || email == "" || email.length == 0){
			$("#succes_error").hide("slow");
			$("#guardar_email").show("slow");	
		}
	});		

			/** ********************************** Email ********************************** */

			/** ********************************** Password ********************************** */			

	//Validate Pass
		$("#passwordConfirmar").change(function(){
			coincidePassword();			
		});	

		function coincidePassword(){
			var pass1 = valor1.val();
			var pass2 = valor2.val();
			console.debug(pass1+"  "+pass2);

			if(pass1 != pass2){
				$("#succes_error_pass").show("slow");
				$("#guardar_pass").hide("slow");

			}else{
				if (pass1 == pass2 && pass1.length > 4 && pass2.length > 4) {
					$("#guardar_pass").click(function(){
						console.debug(pass2);
						$.ajax({
							beforeSend: function(){					
								$(".loanding").show();
								$("#password, #passwordConfirmar").prop("disabled",true);				
							},
							data:{password:pass2},
							async:false,
           					url:"../php/update_pass.php",
           					type:"POST",           
           					cache:false,
							success:function(dato){
								console.log("success:" +dato);
								if(dato == -1){
									console.log("-1:" +dato);
									setTimeout("window.location.href = '../session.php'", 600);
								}else{
									if(dato == 0){
										console.log("0:" +dato);
										$("#warning_no_registrar").show("slow");
										$(".loanding").hide();
										("#password, #passwordConfirmar").prop("disabled",false);										
									}else{
										if(dato == 1){
											console.log("1:" +dato);
											$(".loanding").hide();
											$("#succes_pass").show("slow");
											$("#guardar_pass").hide("slow");
											console.debug("Agregado Contraseña");

											$(".modal-footer #cerrar").click(function(){
		 										location.reload();
											});

											$("modal-header .close").click(function(){
		 										location.reload();
											});			
										}else{
											if(dato == 2){
												console.log("2:" +dato);
												setTimeout("window.location.href = '../session.php'", 600);
											}
										}
									}
								}
							},
							error:function (xhr, ajaxOptions, thrownError){
   								if(xhr.status == 404 || thrownError == 'Not Found') {        			
       								setTimeout("window.location.href = '404.html'", 600);
       								console.log('404'); 
   								}
							}			
						});		
						return false;					
					});		
				}
			}
		}//End function coincidePassword

	//Borrar mensaje de error
	$("#passwordConfirmar, #password").keydown(function(e){
		email = $(this).val();
		console.log(e.toString());
		if( $("#email").is(":focus") || e.keyCode == 8 || email == "" || email.length == 0){
			$("#succes_error_pass").hide("slow");
			$("#guardar_pass").show("slow");	
		}
	});		

			/** ********************************** Password ********************************** */		

	//Salir sestruir session o  error manda pagina 404
	$(".salir").click(function(){
		$.ajax({
			async:false,
           	url:"php/validate/destroy_session.php",
           	type:"POST",           
           	cache:false,
			error:function (xhr, ajaxOptions, thrownError){
   				if(xhr.status == 404 || thrownError == 'Not Found') {        			
       				setTimeout("window.location.href = '404.html'");
       				console.log('404'); 
   				}
			}			
		});	
	});	
});//End $(document).ready(function()
})(jQuery, window);