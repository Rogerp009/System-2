/**
 *	Neon Login Script
 *
 *	Developed by Arlind Nushi - www.laborator.co
 */

var neonLogin = neonLogin || {};

(function($, window, undefined){
	"use strict";
	$(document).ready(function(){	
		$("a #salir").click(function(){
			console.log("Salir");
			$.ajax({
				async:false,
	           	url:"php/validate/destroy_session.php",
	           	type:"POST",           
	           	cache:false,
				error:function (xhr, ajaxOptions, thrownError){
	   				if(xhr.status == 404 || thrownError == 'Not Found') {        			
	       				//setTimeout("window.location.href = '/../404.php'");
	       				console.log('404'); 
	   				}else{
	   					if(xhr.status > 500){
	       					//setTimeout("window.location.href = '/../500.php'");
	       					console.log('404'); 
	   					}
	   				}
				}		
			});	
		});	
	});//End $(document).ready(function()
})(jQuery, window);