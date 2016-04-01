(function($,window,undefined){
	"use strict";
	$(document).ready(function(e){	
		var numero = 0;
		// Tile Stats					
		$.ajax({
			type:"POST",
			url:"../../php/admin_report.php",
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
  			success: function (dato){
				console.debug('dato php ' + dato);
				if(dato.length != ""){
					$(".windows8").hide();	
					$("#cliente").html('<div class="num" data-start="0" data-prefix="" data-end="'+dato.cliente+'" data-postfix="" data-duration="1000" data-delay="0">'+dato.cliente);														
					$("#producto").html('<div class="num" data-start="0" data-prefix="" data-end="'+dato.producto+'" data-postfix="" data-duration="1000" data-delay="0">'+dato.producto);					
					$("#camion").html('<div class="num" data-start="0" data-prefix="" data-end="'+dato.camion+'" data-postfix="" data-duration="1000" data-delay="0">'+dato.camion);	
					$("#pedido").html('<div class="num" data-start="0" data-prefix="" data-end="'+dato.pedido+'" data-postfix="" data-duration="1000" data-delay="0">'+dato.pedido);						
				}
			}  			
		});

		//data
		$('#table-1').dataTable( {
			"paging":   false,			
			"ordering": false,
			"info":     false			
		});

		$('#table-2').dataTable( {//producto
			"paging":   false,			
			"ordering": false,
			"info":     false			
		});
		$('#table-3').dataTable( {//producto
			"paging":   false,			
			"ordering": false,
			"info":     false			
		});	
		$('#table-4').dataTable( {//producto
			"paging":   false,			
			"ordering": false,
			"info":     false			
		});	

		$('#table-5').dataTable( {//producto
			"paging":   false,			
			"ordering": false,
			"info":     false			
		});						
	});//End $(document).ready(function(){
})(jQuery, window);//end ($,window,undefined)						