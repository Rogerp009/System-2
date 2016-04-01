(function($,window,undefined){
	"use strict";
	$(document).ready(function(e){	
		var matricula = "";
		var marca = "";
		var modelo = "";
		$("#matricula").keyup(function(){
			matricula = $(this).val();
			console.log('Valor de matricula:' +matricula);
		});	

	/** Validate */
		//validate matricula
		$("#matricula").change(function(){			
			console.debug("change "+ matricula);
			if(matricula != "" && matricula.length > 0){					
				console.log("Matricula entrada: " +matricula);
				$.ajax({	
					type:"POST",
					url:"../../../php/validate/validateMatricula.php",
					data:{matricula:matricula},
					cache:true,
					beforeSend: function(){		
						$(".fountainG").show();						
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
						console.debug('nombre: '+dato);
						if(dato == 1){
							$("#form_registrar #fountainG").hide();
							$("#error_matricula").addClass('label label-danger').text('La matricula esta egistrada').delay(500).fadeIn("slow");
							$("#matricula").val('');
							$("#form_registrar").addClass('has-error');
							return false;
						}else{
							$("#form_registrar #fountainG").hide();
						}  	
					}														
				});//fin ajax				
			}//end if			
		});//method matricula

		function reset(){
			$('#form_registrar').each(function(){
	  			this.reset();
			});			
		}	//end method

		//$('#success').html("<div class='alert alert-danger text-center'><strong>Error!</strong> Por favor verifique los datos</div>");

		$("#registrar").click(function(){
			matricula = $("#matricula").val();
			marca = $("#marca").val();
			modelo = $("#modelo").val();			
			if(matricula != "" && marca != "" && modelo != ""){
				register(matricula, marca, modelo);
			}	
		});
	

	function register(matricula, marca, modelo){
		console.debug("Register: " + matricula + "," + marca + ",");
				$.ajax({
				beforeSend: function(){		
					$(".windows88").show();						
					$("#matricula").prop("disabled",true);
					$("#marca").prop("disabled",true);
					$("#modelo").prop("disabled",true);
				},
				async:false,
	           	url: "../../php/register_camion.php",
	            type: "POST",
	            data: {
	            	matricula:matricula,
	            	marca:marca,
	            	modelo:modelo
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
					console.debug("Register camion :"+resp);					
					if (resp == 1) {
						$(".windows88").hide();	
						$('#form_registrar').trigger("reset"); //Borrar Campos/Mandar Mensaje/Enviar a login						
						$("#matricula").prop("disabled",false);
						$("#marca").prop("disabled",false);
						$("#modelo").prop("disabled",false);
						reset();				
						setTimeout("window.location.href = '../../roles/admin/camion.php'", 1000);																			
						$('#success').html("<div class='alert alert-success text-center'><strong></strong>Almacenado correctamente.</div>");											
					}else{
						if (resp == 0) {
							$(".windows88").hide();						
							$('#success').html("<div class='alert alert-danger text-center'><strong></strong>El el camion ya esta registrado.</div>");
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

		$("#matricula").keydown(function(e){
			matricula = $(this).val();
			console.log(e.toString());
			if( $("#matricula").is(":focus") || e.keyCode == 8 || username == "" || username.length == 0){
				$("#success").empty();
				//$("#success").remove();
				$("#error_matricula").hide();
				$("#form_registrar").removeClass('has-error');
			}
		});
	});//End $(document).ready(function(){
})(jQuery, window);//end ($,window,undefined)						