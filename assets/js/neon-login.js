/**
 *	Neon Login Script
 *
 *	Developed by Arlind Nushi - www.laborator.co
 */
 
var neonLogin = neonLogin || {};

(function($, window, undefined)
{
	"use strict";
	
	$(document).ready(function()
	{
		neonLogin.$container = $("#form_login");
		// Login Form & Validation
		neonLogin.$container.validate({
			rules: {
				username: {
					required: true	
				},
				
				password: {
					required: true
				},
				
			},
			
			highlight: function(element){
				$(element).closest('.input-group').addClass('validate-has-error');
			},
			
			
			unhighlight: function(element)
			{
				$(element).closest('.input-group').removeClass('validate-has-error');
			},
			
			submitHandler: function(ev){
				// Obtener valores del username y pass
				var username = $("#username").val();
				var password = $("#password").val();
				var action = "validate";			
				console.log("user:"+username + " pass:" + password);
 				//Validar user and pass <> Vacio
				if(username != "" && password != ""){
					//Llamar ajax para verificar los datos si existe
					$.ajax({
						async:false,
						cache:false,						
						type:'POST',
						dataType: 'json',
						url:'php/login.php',
						data:{username:username,
							password:password,action:action},
						success : function(data){
								switch(data.respuesta){
									case -1:
										console.log(data.role);
										$("#error").fadeIn("slow");
										setTimeout(function(){$("#error").fadeOut("slow");}, 5000)								
									break;

									case 0:
										console.log(data.role);
										$("#error_interno").fadeIn("slow");
										setTimeout(function(){$("#error").fadeOut("slow");}, 5000)								
									break;

									case 1:
										console.log(data.role);
										ViewUser(username, data.role, 'roles/usuario/cliente.php');								
									break;

									case 2:
										console.log(data.role);
										ViewUser(username, data.role, 'roles/admin/administrador.php');										
									break;

									case 3:
										console.log(data.role);
										ViewUser(username, data.role, 'roles/secretaria/secretaria.php');									
									break;

									case 4:
										console.log(data.role);
										ViewUser(username, data.role, 'roles/chofer/chofer.php');							
									break;																																								
								}//end case							
						}
					});
				}else{
					$("#error").fadeIn("slow");
					setTimeout(function(){$("#error").fadeOut("slow");},5000)
				}//End If							
			}
		});


		// Lockscreen & Validation
		var is_lockscreen = $(".login-page").hasClass('is-lockscreen');
		
		if(is_lockscreen)
		{
			neonLogin.$container = $("#form_lockscreen");
			neonLogin.$ls_thumb = neonLogin.$container.find('.lockscreen-thumb');

			//Si el usuario cierra la session muestra el username y solamente espera el pass
			var username = $.cookie('username');			
			$(".lockscreen-details").children().eq(0).html(username);

			neonLogin.$container.validate({
				rules: {
				
					password: {
						required: true
					},
					
				},
				
				highlight: function(element){
					$(element).closest('.input-group').addClass('validate-has-error');
				},
				
				
				unhighlight: function(element)
				{
					$(element).closest('.input-group').removeClass('validate-has-error');
				},
				
				submitHandler: function(ev)
				{	
					var username = $.cookie('username');
					var password = $('#password').val();
					var action = "validate";		
					console.log('username: '+username);
					console.debug('Contraseña: '+password);

					if(username != "" && password != ""){
						$.ajax({
						async:false,
						cache:false,						
						type:'POST',
						dataType: 'json',
						url:'php/login.php',
						data:{username:username,
							password:password,
							action:action},
							success : function(data){
								switch(data.respuesta){
									case -1:
										console.log(data.role);
										$("#error").fadeIn("slow");
										setTimeout(function(){$("#error").fadeOut("slow");}, 5000)								
									break;

									case 0:
										console.log(data.role);
										$("#error_interno").fadeIn("slow");
										setTimeout(function(){$("#error").fadeOut("slow");}, 5000)								
									break;

									case 1:
										console.log(data.role);
										ViewUserLockScreen(username, data.role, 'roles/usuario/cliente.php');								
									break;

									case 2:
										console.log(data.role);
										ViewUserLockScreen(username, data.role, 'roles/admin/administrador.php');										
									break;

									case 3:
										console.log(data.role);
										ViewUserLockScreen(username, data.role, 'roles/secretaria/secretaria.php');									
									break;

									case 4:
										console.log(data.role);
										ViewUserLockScreen(username, data.role, 'roles/chofer/chofer.php');							
									break;																																								
								}//end case							
						}
						});
					}else{
						$("#error").fadeIn("slow");
							setTimeout(function(){$("#error").fadeOut("slow");},5000)
					}//End If	
				}
			});
		}

		//animation lock
		function ViewUser(user, role, location){
			console.log("role: "+ role + "location: "+ location);
			$(".login-page").addClass('logging-in');			
			setTimeout(function(){
				var random_pct = 25 + Math.round(Math.random() * 30);				
				neonLogin.setPercentage(random_pct, function(){
					setTimeout(function(){
						neonLogin.setPercentage(100, function(){
 							var date = new Date();
 							var minutes = 10;
 							date.setTime(date.getTime() + (minutes * 60 * 1000));//Trasnformacion de min a seg para tiempo de expiracion de cookie								
							$.cookie("username", user, {path: "/", expires: date });												
							console.log("Cookie: " + $.cookie("username"));										
							setTimeout("window.location.href = '"+location+"'", 600);
						}, 2);						
					}, 820);
				});
				
			}, 650);
		}//End ViewUser();

		function ViewUserLockScreen(user, role, location){
			console.log("role: "+ role + "location: "+ location);
			$(".login-page").addClass('logging-in-lockscreen'); // This will hide the login form and init the progress bar			
			setTimeout(function(){
				var random_pct = 25 + Math.round(Math.random() * 30);
				neonLogin.setPercentage(random_pct, function(){
					setTimeout(function(){
						neonLogin.setPercentage(100, function(){
 							var date = new Date();
 							var minutes = 10;
 							date.setTime(date.getTime() + (minutes * 60 * 1000));//Trasnformacion de min a seg para tiempo de expiracion de cookie								
							$.cookie("username", user, {path: "/", expires: date });												
							console.log("Cookie: " + $.cookie("username"));										
							setTimeout("window.location.href = '"+location+"'", 600);
						}, 2);						
					}, 820);
				});						
			}, 650);
		}//End ViewUser();		
		//Si precionan link va a iniciar con otra session remueve cookie and borra el username
		$(".olvido_pass").click(function(){
			$.removeCookie('username', { path: '/' });
			$(".lockscreen-details").children().eq(0).html('');
		});

		$("a.back").click(function(){
			parent.history.back();		
			$.removeCookie('username', { path: '/' });
			$(".lockscreen-details").children().eq(0).html('');			
		});
		// Login Form Setup
		neonLogin.$body = $(".login-page");
		neonLogin.$login_progressbar_indicator = $(".login-progressbar-indicator h3");
		neonLogin.$login_progressbar = neonLogin.$body.find(".login-progressbar div");
		
		neonLogin.$login_progressbar_indicator.html('0%');
		
		if(neonLogin.$body.hasClass('login-form-fall'))
		{
			var focus_set = false;
			
			setTimeout(function(){ 
				neonLogin.$body.addClass('login-form-fall-init')
				
				setTimeout(function()
				{
					if( !focus_set)
					{
						neonLogin.$container.find('input:first').focus();
						focus_set = true;
					}
					
				}, 550);
				
			}, 0);
		}
		else
		{
			neonLogin.$container.find('input:first').focus();
		}
		
		// Focus Class
		neonLogin.$container.find('.form-control').each(function(i, el)
		{
			var $this = $(el),
				$group = $this.closest('.input-group');
			
			$this.prev('.input-group-addon').click(function()
			{
				$this.focus();
			});
			
			$this.on({
				focus: function()
				{
					$group.addClass('focused');
				},
				
				blur: function()
				{
					$group.removeClass('focused');
				}
			});
		});
		
		// Functions
		$.extend(neonLogin, {
			setPercentage: function(pct, callback)
			{
				pct = parseInt(pct / 100 * 100, 10) + '%';
				
				// Lockscreen
				if(is_lockscreen)
				{
					neonLogin.$lockscreen_progress_indicator.html(pct);
					
					var o = {
						pct: currentProgress
					};
					
					TweenMax.to(o, .7, {
						pct: parseInt(pct, 10),
						roundProps: ["pct"],
						ease: Sine.easeOut,
						onUpdate: function()
						{
							neonLogin.$lockscreen_progress_indicator.html(o.pct + '%');
							drawProgress(parseInt(o.pct, 10)/100);
						},
						onComplete: callback
					});	
					return;
				}
				
				// Normal Login
				neonLogin.$login_progressbar_indicator.html(pct);
				neonLogin.$login_progressbar.width(pct);
				
				var o = {
					pct: parseInt(neonLogin.$login_progressbar.width() / neonLogin.$login_progressbar.parent().width() * 100, 10)
				};
				
				TweenMax.to(o, .7, {
					pct: parseInt(pct, 10),
					roundProps: ["pct"],
					ease: Sine.easeOut,
					onUpdate: function()
					{
						neonLogin.$login_progressbar_indicator.html(o.pct + '%');
					},
					onComplete: callback
				});
			}
		});
		
		
		// Lockscreen Create Canvas
		if(is_lockscreen)
		{
			neonLogin.$lockscreen_progress_canvas = $('<canvas></canvas>');
			neonLogin.$lockscreen_progress_indicator =  neonLogin.$container.find('.lockscreen-progress-indicator');
			
			neonLogin.$lockscreen_progress_canvas.appendTo(neonLogin.$ls_thumb);
			
			var thumb_size = neonLogin.$ls_thumb.width();
			
			neonLogin.$lockscreen_progress_canvas.attr({
				width: thumb_size,
				height: thumb_size
			});
			
			
			neonLogin.lockscreen_progress_canvas = neonLogin.$lockscreen_progress_canvas.get(0);
			
			// Create Progress Circle
			var bg = neonLogin.lockscreen_progress_canvas,
				ctx = ctx = bg.getContext('2d'),
				imd = null,
				circ = Math.PI * 2,
				quart = Math.PI / 2,
				currentProgress = 0;
			
			ctx.beginPath();
			ctx.strokeStyle = '#F20C18';
			ctx.lineCap = 'square';
			ctx.closePath();
			ctx.fill();
			ctx.lineWidth = 3.0;
			
			imd = ctx.getImageData(0, 0, thumb_size, thumb_size);
			
			var drawProgress = function(current) {
			    ctx.putImageData(imd, 0, 0);
			    ctx.beginPath();
			    ctx.arc(thumb_size/2, thumb_size/2, 70, -(quart), ((circ) * current) - quart, false);
			    ctx.stroke();
			    
			    currentProgress = current * 100;
			}
			
			drawProgress(0/100);
			
			
			neonLogin.$lockscreen_progress_indicator.html('0%');
			
			ctx.restore();
		}
		
	});


	/** Al Presionar el input borra el*/
	$("#username").keyup(function(e){
		console.log(e.toString());
		if( $("#username").is(":focus") || e.keyCode == 8){
			$("#error").fadeOut("slow")
		}
	});
	$("#password").keyup(function(e){
		console.log(e.toString());
		if( $("#password").is(":focus") || e.keyCode == 8){		
			$("#error").fadeOut("slow")
		}
	});

	(function (factory) {
		if (typeof define === 'function' && define.amd) {
			// AMD
			define(['jquery'], factory);
		} else if (typeof exports === 'object') {
			// CommonJS
			factory(require('jquery'));
		} else {
			// Browser globals
			factory(jQuery);
		}
	}(function ($) {

		var pluses = /\+/g;

		function encode(s) {
			return config.raw ? s : encodeURIComponent(s);
		}

		function decode(s) {
			return config.raw ? s : decodeURIComponent(s);
		}

		function stringifyCookieValue(value) {
			return encode(config.json ? JSON.stringify(value) : String(value));
		}

		function parseCookieValue(s) {
			if (s.indexOf('"') === 0) {
				// This is a quoted cookie as according to RFC2068, unescape...
				s = s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, '\\');
			}

			try {
				// Replace server-side written pluses with spaces.
				// If we can't decode the cookie, ignore it, it's unusable.
				// If we can't parse the cookie, ignore it, it's unusable.
				s = decodeURIComponent(s.replace(pluses, ' '));
				return config.json ? JSON.parse(s) : s;
			} catch(e) {}
		}

		function read(s, converter) {
			var value = config.raw ? s : parseCookieValue(s);
			return $.isFunction(converter) ? converter(value) : value;
		}

		var config = $.cookie = function (key, value, options) {

			// Write

			if (value !== undefined && !$.isFunction(value)) {
				options = $.extend({}, config.defaults, options);

				if (typeof options.expires === 'number') {
					var days = options.expires, t = options.expires = new Date();
					t.setTime(+t + days * 864e+5);
				}

				return (document.cookie = [
					encode(key), '=', stringifyCookieValue(value),
					options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
					options.path    ? '; path=' + options.path : '',
					options.domain  ? '; domain=' + options.domain : '',
					options.secure  ? '; secure' : ''
				].join(''));
			}

			// Read

			var result = key ? undefined : {};

			// To prevent the for loop in the first place assign an empty array
			// in case there are no cookies at all. Also prevents odd result when
			// calling $.cookie().
			var cookies = document.cookie ? document.cookie.split('; ') : [];

			for (var i = 0, l = cookies.length; i < l; i++) {
				var parts = cookies[i].split('=');
				var name = decode(parts.shift());
				var cookie = parts.join('=');

				if (key && key === name) {
					// If second argument (value) is a function it's a converter...
					result = read(cookie, value);
					break;
				}

				// Prevent storing a cookie that we couldn't decode.
				if (!key && (cookie = read(cookie)) !== undefined) {
					result[name] = cookie;
				}
			}

			return result;
		};

		config.defaults = {};

		$.removeCookie = function (key, options) {
			if ($.cookie(key) === undefined) {
				return false;
			}

			// Must not alter options, thus extending a fresh object...
			$.cookie(key, '', $.extend({}, options, { expires: -1 }));
			return !$.cookie(key);
		};

	}));
})(jQuery, window);