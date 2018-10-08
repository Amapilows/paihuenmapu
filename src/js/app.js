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

//API GOOGLE//

var coords = {
 	isla: {
 		lat: -27.112723,
 		lng: -109.34968650000002
 	},
 	arica: {
 		lat: -18.4782534,
 		lng: -70.31259879999999
 	},
 	santiago: {
 		lat: -33.4488897,
 		lng: -70.6692655
 	}
 };

var image = {
    'clear-day':'https://icons.wxug.com/i/c/v4/clear.svg',
    'clear-night':'https://icons.wxug.com/i/c/v4/nt_clear.svg',
    'partly-cloudy-day':'https://icons.wxug.com/i/c/v4/partlycloudy.svg',
    'partly-cloudy-night':'https://icons.wxug.com/i/c/v4/nt_hazy.svg',
    'cloudy':'https://icons.wxug.com/i/c/v4/cloudy.svg',
    'rain':'https://icons.wxug.com/i/c/v4/rain.svg'
  }

var map = null;
var marker = null;

function initMap() {
	var location = null;
	map = new google.maps.Map(document.getElementById('map'), {
		zoom: 11,
		center: location
	});

	marker = new google.maps.Marker({
		position: location,
		map: map
	});
}

var proxy = 'https://cors-anywhere.herokuapp.com/'
var url = 'https://api.darksky.net/forecast/';
var apiKey = 'aae37a00c135cac77e776812f0162463';
var queryParams = [];

$('#select').on('change', function() {
	map.setCenter(coords[$(this).val()]);
	marker.setMap(null);
	marker = new google.maps.Marker({
		position: (coords[$(this).val()]),
		map: map
	});

	$.ajax({
		url: proxy + url + apiKey + '/' + coords[$(this).val()].lat + ',' + coords[$(this).val()].lng,
		method: 'GET',
		crossDomain: true,
		dataType: 'json',
		xhrFields: {cors: false}
	}).then(function(data) {
		console.log(data);
		$('#resumen').text(parseInt(data.currently.temperature) + '° ' + data.currently.summary);
		$('.img-responsive').attr('src',image[data.currently.icon]);
	});

});