/**
 *	Neon Demo Scripts (Demo Theme Only)
 *
 *	Developed by Arlind Nushi - www.laborator.co
 */

if(typeof Dropzone != 'undefined')
{
	Dropzone.autoDiscover = false;
}

;(function($, window, undefined)
{
	"use strict";
	
	$(document).ready(function()
	{
		
		// Dropzone Example
		if(typeof Dropzone != 'undefined')
		{
			if($("#dropzone_example").length)
			{
				var dz = new Dropzone("#dropzone_example"),
					dze_info = $("#dze_info"),
					status = {uploaded: 0, errors: 0};
				
				var $f = $('<tr><td class="name"></td><td class="size"></td><td class="type"></td><td class="status"></td></tr>');

				dz.on("success", function(file) {
					
					var _$f = $f.clone();
					
					dze_info.removeClass('hidden');
					
					_$f.addClass('success');
					
					_$f.find('.name').html(file.name);
					_$f.find('.size').html(parseInt(file.size / 1024, 10) + ' KB');
					_$f.find('.type').html(file.type);
					_$f.find('.status').html('Uploaded <i class="entypo-check"></i>');
					
					dze_info.find('tbody').append( _$f );
					
					status.uploaded++;
					
					dze_info.find('tfoot td').html('<span class="label label-success">' + status.uploaded + ' uploaded</span> <span class="label label-danger">' + status.errors + ' not uploaded</span>');
					
				})
				.on('error', function(file)
				{
					var _$f = $f.clone();
					
					dze_info.removeClass('hidden');
					
					_$f.addClass('danger');
					
					_$f.find('.name').html(file.name);
					_$f.find('.size').html(parseInt(file.size / 1024, 10) + ' KB');
					_$f.find('.type').html(file.type);
					_$f.find('.status').html('Uploaded <i class="entypo-cancel"></i>');
					
					dze_info.find('tbody').append( _$f );
					
					status.errors++;
					
					dze_info.find('tfoot td').html('<span class="label label-success">' + status.uploaded + ' uploaded</span> <span class="label label-danger">' + status.errors + ' not uploaded</span>');
				});
			}
			
		}
	});
	
/*!
 * jQuery Cookie Plugin v1.4.1
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2006, 2014 Klaus Hartl
 * Released under the MIT license
 */
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

		if (arguments.length > 1 && !$.isFunction(value)) {
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
