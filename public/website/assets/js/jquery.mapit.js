/**
 * MapIt
 *
 * @copyright	Copyright 2013, Dimitris Krestos
 * @license		Apache License, Version 2.0 (http://www.opensource.org/licenses/apache2.0.php)
 * @link			http://vdw.staytuned.gr
 * @version		v0.2.2
 */

/* Available options
 *
 * Map type: 	ROADMAP, SATELLITE, HYBRID, TERRAIN
 * Map styles: false, GRAYSCALE
 *
 */

	/* Sample html structure

	<div id='map_canvas'></div>

	*/

//AIzaSyAINYxjzS5XqkZQCdQ-KSe4JRsoo5TTL44 
  // <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" type="text/javascript">
 
//document.write('<scr'+'ipt type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false" ></scr'+'ipt>');

document.write('<scr'+'ipt type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAINYxjzS5XqkZQCdQ-KSe4JRsoo5TTL44&callback=initMap" ></scr'+'ipt>');

;(function($, window, undefined) {
	"use strict";

	$.fn.mapit = function(options) {

		var defaults = {
			latitude: 	 13.022833482556612, 
			longitude: 	 80.253019246898,
			zoom: 			12,
			type: 			 'ROADMAP',
			scrollwheel: false,
			marker: {
				//latitude: 	13.3700501,
				//longitude: 	77.7677515,
				///icon: 			'images/marker_red.png',
				//title: 			'The Hotel',
				//open: 			false,
				//center: 		true
			},
//address: '<h2>The India Cements Limited</h2><p>Sankarnagar P.O., Tirunelveli District, Tamil Nadu, Pincode:627357 </p><p>Tel.: 0462 2300221<br />Fax: 0462 2300294</p>',
			//styles: 'GRAYSCALE',
			locations: [
				[13.044099841270507, 80.24058623870108, 'https://gericare.in/beta/public/website/assets/images/marker.png', '', '<div class="plantimg clearfix"><img src="https://gericare.in/beta/public/website/assets/images/map-t-nagar.jpg"/></div><h2 style="font-weight: 700;font-size: 15px;color: #7C164B;margin: 15px 0px 10px;line-height: 20px;">Geri Care Hospital - T.Nagar<br><span style="color: #000;font-size: 13px;margin-bottom:5px;">No.8, Dr.Nair road, Behind Vani mahal,<br>T. Nagar, Chennai 600017<br><strong><img src="https://gericare.in/beta/public/website/assets/images/rating.jpg"/></strong></span><br><span><a style="color: #7C164B; margin-top:5px;font-weight: 500;" href="https://www.google.com/maps/dir//Geri+Care+Hospital+T.Nagar,+8,+Dr+Nair+Rd,+Parthasarathi+Puram,+T.+Nagar,+Chennai,+Tamil+Nadu+600017/@13.0439483,80.2406077,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3a526791bebeb443:0xda7b1c6ed86b022a!2m2!1d80.2406077!2d13.0439483?entry=ttu" target="_blank">Get Direction</span></h2> '], 
				
				[12.983293353115576, 80.20030574475071, 'https://gericare.in/beta/public/website/assets/images/marker.png', '', '<div class="plantimg clearfix"><img src="https://gericare.in/beta/public/website/assets/images/velacherry-map.jpg"/></div><h2 style="font-weight: 700;font-size: 15px;color: #7C164B;margin: 15px 0px 10px;line-height: 20px;">Geri Care Hospital - Adambakkam<br><span style="color: #000;font-size: 13px;margin-bottom:5px;">100 Feet Adambakkam inner ring road,<br> Ward F, Block 17, Adambakkam,<br>Chennai, Tamil Nadu 600088<br><strong><img src="https://gericare.in/beta/public/website/assets/images/rating.jpg"/></strong></span><br><span><a style="color: #7C164B; margin-top:5px;font-weight: 500;" href="https://www.google.com/maps/place/Geri+Care+Hospital+Velachery/@12.9800682,80.1980829,17z/data=!4m6!3m5!1s0x3a525d3c24c1dbdb:0x93067576a17cd1b8!8m2!3d12.9800682!4d80.2002716!16s%2Fg%2F11t_gzmnx0?entry=tts&shorturl=1" target="_blank">Get Direction</span></h2> '], 
				
				[12.99958788041761, 80.25408423851532, 'https://gericare.in/beta/public/website/assets/images/marker.png', '', '<div class="plantimg clearfix"><img src="https://gericare.in/beta/public/website/assets/images/adyar-map.jpg"/></div><h2 style="font-weight: 700;font-size: 15px;color: #7C164B;margin: 15px 0px 10px;line-height: 20px;">Geri Care Clinics - Adyar<br><span style="color: #000;font-size: 13px;margin-bottom:5px;">21, 1st avenue, Indira Nagar,<br>Adyar, Chennai 600020<br><strong><img src="https://gericare.in/beta/public/website/assets/images/rating.jpg"/></strong></span><br><span><a style="color: #7C164B; margin-top:5px;font-weight: 500;" href="https://www.google.com/maps/dir//Geri+Care+%7C+Home+Care+%26+Consultation,+No.21,+1st+St,+Indira+Nagar,+Adyar,+Chennai,+Tamil+Nadu+600020/@12.999337,80.251917,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3a5267853522f365:0x1dc3e7d7a2a95d9!2m2!1d80.2541057!2d12.999337?entry=ttu" target="_blank">Get Direction</span></h2>'], 
				
				[13.091367237211617, 80.21792048269542, 'https://gericare.in/beta/public/website/assets/images/marker.png', '', '<div class="plantimg clearfix"><img src="https://gericare.in/beta/public/website/assets/images/anna-nagar-map.jpg"/></div><h2 style="font-weight: 700;font-size: 15px;color: #7C164B;margin: 15px 0px 10px;line-height: 20px;">Geri Care Clinics - Anna Nagar<br><span style="color: #000;font-size: 13px;margin-bottom:5px;">Plot no.3698, Q Block-100, 3rd Avenue,<br>Anna Nagar, Chennai, Tamil Nadu 600040<br><strong><img src="https://gericare.in/beta/public/website/assets/images/rating.jpg"/></strong></span><br><span><a style="color: #7C164B; margin-top:5px;font-weight: 500;" href="https://www.google.com/maps/dir//Plot+no.3698,+Q,+Geri+Care+Clinics+Anna+Nagar,+Block-100,+3rd+Ave,+Block+Q,+Anna+Nagar,+Chennai,+Tamil+Nadu+600040/@13.0911687,80.2178883,17z/data=!4m16!1m7!3m6!1s0x3a5265ab99a9f5b9:0xcb987054dae3920c!2sGeri+Care+Clinics+Anna+Nagar!8m2!3d13.0911687!4d80.2178883!16s%2Fg%2F11tk4bht0x!4m7!1m0!1m5!1m1!1s0x3a5265ab99a9f5b9:0xcb987054dae3920c!2m2!1d80.2178883!2d13.0911687?entry=ttu" target="_blank">Get Direction</span></h2>  '], 
				
				[12.944290642801182, 80.24030833851451, 'https://gericare.in/beta/public/website/assets/images/marker.png', '', '<div class="plantimg clearfix"><img src="https://gericare.in/beta/public/website/assets/images/thuraipaakkam-map.jpg"/></div><h2 style="font-weight: 700;font-size: 15px;color: #7C164B;margin: 15px 0px 10px;line-height: 20px;">Geri Care Assisted Living <br>- Thoraipakkam<br><span style="color: #000;font-size: 13px;margin-bottom:5px;">AKS Residency, Balamurugan Garden,<br>1st Main Road Thoraipakkam, <br>Chennai-600097<br><strong><img src="https://gericare.in/beta/public/website/assets/images/rating.jpg"/></strong></span><br><span><a style="color: #7C164B; margin-top:5px;font-weight: 500;" href="https://www.google.com/maps/dir//Geri+Care+Assisted+Living,+AKS+RESIDENCY,+Balamurugan+Gardens+1st+Main+Rd,+Thoraipakkam,+Tamil+Nadu+600097/@12.9441129,80.2377549,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3a525dbe8ee84dd5:0xb949e175506a9165!2m2!1d80.2403298!2d12.9441129?entry=ttu" target="_blank">Get Direction</span></h2> '], 
				
				[13.024349991142719, 80.25585876735146, 'https://gericare.in/beta/public/website/assets/images/marker.png', '', '<div class="plantimg clearfix"><img src="https://gericare.in/beta/public/website/assets/images/rp-map.jpg"/></div><h2 style="font-weight: 700;font-size: 15px;color: #7C164B;margin: 15px 0px 10px;line-height: 20px;">Geri Care Assisted Living - RA Puram<br><span style="color: #000;font-size: 13px;margin-bottom:5px;">New #10, Old #23, 7th Main Road,<br>RA Puram, Chennai - 600028<br><strong><img src="https://gericare.in/beta/public/website/assets/images/rating.jpg"/></strong></span><br><span><a style="color: #7C164B; margin-top:5px;font-weight: 500;" href="https://www.google.com/maps/dir//New+no.10,+Old+no.23,+Geri+Care+Assisted+Living+RA+Puram,+7th+Main+Rd,+Govindaswamy+Nagar,+Raja+Annamalai+Puram,+Chennai,+Tamil+Nadu+600028/@13.0241514,80.2558695,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3a5267215488f3b7:0x2e7865b3b3571e1a!2m2!1d80.2558699!2d13.0241779?entry=ttu" target="_blank">Get Direction</span></h2>']


			],
			origins: [
				['37.936294', '23.947394'],
				['37.975669', '23.733868']
			]
		};

		var options = $.extend(defaults, options);

		$(this).each(function() {

			var $this = $(this);

				// Init Map
				var directionsDisplay = new google.maps.DirectionsRenderer();

				var mapOptions = {
					scrollwheel: options.scrollwheel,
					scaleControl: false,
					center: 			options.marker.center ? new google.maps.LatLng(options.marker.latitude, options.marker.longitude) : new google.maps.LatLng(options.latitude, options.longitude),
					zoom: 				options.zoom,
					mapTypeId: 		eval('google.maps.MapTypeId.' + options.type)
				};
				var map = new google.maps.Map(document.getElementById($this.attr('id')), mapOptions);
				directionsDisplay.setMap(map);

				// Styles
				if (options.styles) {
					var GRAYSCALE_style = [{featureType:"all",elementType:"all",stylers:[{saturation: -100}]}];
					var MIDNIGHT_style	= [{featureType:'water',stylers:[{color:'#021019'}]},{featureType:'landscape',stylers:[{color:'#08304b'}]},{featureType:'poi',elementType:'geometry',stylers:[{color:'#0c4152'},{lightness:5}]},{featureType:'road.highway',elementType:'geometry.fill',stylers:[{color:'#000000'}]},{featureType:'road.highway',elementType:'geometry.stroke',stylers:[{color:'#0b434f'},{lightness:25}]},{featureType:'road.arterial',elementType:'geometry.fill',stylers:[{color:'#000000'}]},{featureType:'road.arterial',elementType:'geometry.stroke',stylers:[{color:'#0b3d51'},{lightness:16}]},{featureType:'road.local',elementType:'geometry',stylers:[{color:'#000000'}]},{elementType:'labels.text.fill',stylers:[{color:'#ffffff'}]},{elementType:'labels.text.stroke',stylers:[{color:'#000000'},{lightness:13}]},{featureType:'transit',stylers:[{color:'#146474'}]},{featureType:'administrative',elementType:'geometry.fill',stylers:[{color:'#000000'}]},{featureType:'administrative',elementType:'geometry.stroke',stylers:[{color:'#144b53'},{lightness:14},{weight:1.4}]}]
					var BLUE_style			= [{featureType:'water',stylers:[{color:'#46bcec'},{visibility:'on'}]},{featureType:'landscape',stylers:[{color:'#f2f2f2'}]},{featureType:'road',stylers:[{saturation:-100},{lightness:45}]},{featureType:'road.highway',stylers:[{visibility:'simplified'}]},{featureType:'road.arterial',elementType:'labels.icon',stylers:[{visibility:'off'}]},{featureType:'administrative',elementType:'labels.text.fill',stylers:[{color:'#444444'}]},{featureType:'transit',stylers:[{visibility:'off'}]},{featureType:'poi',stylers:[{visibility:'off'}]}]
					var mapType = new google.maps.StyledMapType(eval(options.styles + '_style'), { name: options.styles });
					map.mapTypes.set(options.styles, mapType);
					map.setMapTypeId(options.styles);
				}

				// Home Marker
				var home = new google.maps.Marker({
					map: 			map,
					position: new google.maps.LatLng(options.marker.latitude, options.marker.longitude),
					icon: 		new google.maps.MarkerImage(options.marker.icon),
					title: 		options.marker.title
				});

				// Add info on the home marker
				var info = new google.maps.InfoWindow({
					content: options.address
				});

				// Open the info window immediately
				if (options.marker.open) {
					info.open(map, home);
				} else {
					google.maps.event.addListener(home, 'click', function() {
						info.open(map, home);
					});
				};

				// Create Markers (locations)
				var infowindow = new google.maps.InfoWindow();
				var marker, i;
				var markers = [];

				for (i = 0; i < options.locations.length; i++) {

					// Add Markers
					marker = new google.maps.Marker({
						position: new google.maps.LatLng(options.locations[i][0], options.locations[i][1]),
						map: 			map,
						icon: 		new google.maps.MarkerImage(options.locations[i][2] || options.marker.icon),
						title: 		options.locations[i][3]
					});

					// Create an array of the markers
					markers.push(marker);

					// Init info for each marker
					google.maps.event.addListener(marker, 'click', (function(marker, i) {
						return function() {
							infowindow.setContent(options.locations[i][4]);
							infowindow.open(map, marker);
						}
					})(marker, i));

				};

				// Directions
				var directionsService = new google.maps.DirectionsService();

				$this.on ('route', function(event, origin) {
					var request = {
						origin: 			new google.maps.LatLng(options.origins[origin][0], options.origins[origin][1]),
						destination: 	new google.maps.LatLng(options.marker.latitude, options.marker.longitude),
						travelMode: 	google.maps.TravelMode.DRIVING
					};
					directionsService.route(request, function(result, status) {
						if (status == google.maps.DirectionsStatus.OK) {
							directionsDisplay.setDirections(result);
						};
					});
				});

				// Hide Markers Once (helper)
				//$this.on ('hide_all', function() {
					//for (var i=0; i<options.locations.length; i++) {
					//	markers[i].setVisible(false);
					//};
				//});

				// Show Markers Per Category (helper)
				$this.on ('show', function(event, category) {
					$this.trigger('hide_all');
					$this.trigger('reset');

					// Set bounds
					var bounds = new google.maps.LatLngBounds();
					for (var i=0; i<options.locations.length; i++) {
						if (options.locations[i][6] == category) {
							markers[i].setVisible(true);
						};

						// Add markers to bounds
						bounds.extend(markers[i].position);
					};

					// Auto focus and center
					map.fitBounds(bounds);
				});

				// Hide Markers Per Category (helper)
				$this.on ('hide', function(event, category) {
					for (var i=0; i<options.locations.length; i++) {
						if (options.locations[i][6] == category) {
							markers[i].setVisible(false);
						};
					};
				});

				// Clear Markers (helper)
				$this.on ('clear', function() {
					if (markers) {
						for (var i = 0; i < markers.length; i++ ) {
							markers[i].setMap(null);
						};
					};
				});

				$this.on ('reset', function() {
					map.setCenter(new google.maps.LatLng(options.latitude, options.longitude), options.zoom);
				});

				// Hide all locations once
				$this.trigger('hide_all');

		});

	};

	$(document).ready(function () { $('[data-toggle="mapit"]').mapit(); });

})(jQuery);