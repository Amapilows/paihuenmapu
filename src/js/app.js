import $ from 'jquery';
window.$ = window.jQuery = $

require('popper.js');
require('bootstrap');

$(document).ready( function($) {
	$('.mobile_menu').on('click', function(event){ 
		event.stopPropagation();
		$('nav.header_menu').toggle('slow');
	});

	var breakpoint =810;
	$(window).resize(function(){
		if($(document).width() >= breakpoint){
			$('nav.header_menu').show();
		} else {
			$('nav.header_menu').hide();
		}
	});

});