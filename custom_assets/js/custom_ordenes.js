(function($, window, undefined){
	"use strict";
	$(document).ready(function(e){//main	
		var id;

		$.ajax({
			type:"POST",
			url:"../../php/ordenes_compra.php",
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
				console.debug('Respuesta Ajax ' + data[0].codigo_producto);
				if(data != null){
					$(".windows8").hide();				
					for (var i in data) {
						//var time_line = '<article class="timeline-entry left-aligned" value="'+data[i].codigo_producto+'"><div class="timeline-entry-inner"><time class="timeline-time" datetime="2014-01-10T03:45"><span id="fecha">'+data[i].fecha_orden+'</span></time><div  id="codigo'+data[i].codigo_producto+'" value="'+data[i].codigo_producto+'" class="timeline-icon bg-secondary"><i class="entypo-monitor"></i></div><div class="timeline-label"><h2><a href="#">'+data[i].nombre+' '+data[i].apellido+'</a> <span>'+data[i].tipo+' '+data[i].presentacion+'</span></h2><p>Cantidad Caja:'+data[i].cantidad_caja+'</p><p>Total Unida:'+data[i].cantidad_caja*data[i].precio_caja+' Bs'+'</p></div></div></article>';
						//$(".timeline-centered").append(time_line);
					};			
				}
			}  			
		});

	    $("#table_3").dataTable({
			"paging":   false,			
			"ordering": false,
			"info":     false			
		});

	});//End $(document).ready(function()
})(jQuery, window);