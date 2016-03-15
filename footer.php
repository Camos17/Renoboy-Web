

		<footer class="col-xs-12 no-padding estilo-footer">
			<div class="col-xs-12 col-md-3 col-md-push-3 col-lg-3 col-lg-push-3 no-padding texto-sedes">
				<p class="text-center"><strong>Planta Renoboy Bogotá</strong><br>
				   Calle 17A N° 69F - 58 Zona Industrial Montevideo<br>
				   <a href="tel: Tel: (+571) 742 2779 ">Tel: (+571) 742 2779</a></p>
			</div>

			<div id="carousel-legal" class="carousel slide carousel-legal col-xs-12 col-md-3 col-md-pull-3 col-lg-3 col-lg-pull-3" data-ride="carousel" data-interval="false">
			 
			  <!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
					 	<div class="col-xs-6">
					 		<div class="col-xs-6 col-xs-offset-6 no-padding icono-legal">
					 			<img class="va pull-right" src="img/iso14001.svg" alt="">	
					 		</div>
					 	</div>
					 	<div class="col-xs-6">
					 		<div class="col-xs-6 no-padding icono-legal">
					 			<img class="va pull-left" src="img/iso9001.svg" alt="">	
					 		</div>
					 	</div>
					</div>
					<div class="item">
						<div class="col-xs-6">
							<div class="col-xs-6 col-xs-offset-6 no-padding icono-legal">
					 			<img class="va pull-right" src="img/procesos.svg" alt="">	
					 		</div>
					 	</div>
					 	<div class="col-xs-6">
					 		<div class="col-xs-6 col-xs-offste-6 no-padding icono-legal">
					 			<img class="va pull-left icono-iqnet" src="img/iqnet.svg" alt="">
					 		</div>
					 	</div>
					</div>
				</div>
			 
				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-legal" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#carousel-legal" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div> <!-- Carousel -->

			<div class="col-xs-12 col-md-6 col-lg-6 c2-footer">
				
			
				<div class="col-xs-12 col-md-4 no-padding texto-sedes2">
					<p class="text-center"><strong>Planta Renoboy Duitama</strong><br>
					Ciudadela Industrial Lote M5<br>
				  	<a href="tel: Tel: (+571) 765 0402">Tel: (+571) 765 0402</a><br><br>
					<strong>Planta Renoboy Ibagué</strong><br>
					Carrera 48 Sur N° 92 - 15 Vía Picaleña<br>
					<a href="tel: (+578) 277 1099">Tel: (+578) 277 1099</a></p>
				</div>
				<div class="col-xs-12 no-padding col-md-8 visible-md visible-lg texto-sedes2">
					<div class="col-md-6">
						<p class="text-center"><strong>Planta Renoboy Yumbo</strong><br>
						Carrera 20G N° 14B - 36 
						 Yumbo<br>
						<a href="tel: (+572) 485 3453">Tel: (+572) 485 3453</a><br><br>
						<strong>Planta Renoboy Sabaleta</strong><br>
						Carrera 47 E N° 78C Sur - 95 Ciudadela Industrial ACIC<br>
						<a href="tel: (+574) 604 0368">Tel: (+574) 604 0368</a><br><br></p>
					</div>
					<div class="col-md-6 texto-sedes2 texto-sedes3">
						<p class="text-center"><strong>Planta Renoboy Tubará</strong><br>
						Vía Tubará Kilómetro 11 Diagonal Relleno AAA<br>
						<a href="tel: (+575) 385 6034">Tel: (+575) 385 6034</a><br><br>
						<strong>Planta Renoboy Girón</strong><br>
						Carrera 13 N° 70 - 154 Km 6 Autopista Girón<br>
						<a href="tel: (+577) 697 2696">Tel: (+577) 697 2696</a><br><br>
						</p>
					</div>					
				</div>
				<div id="mas-sedes" class="col-xs-12 hidden-md hidden-lg no-padding texto-sedes2">
					<p class="text-center"><strong>Planta Renoboy Yumbo</strong><br>
					Carrera 20G N° 14B - 36 Cencar Yumbo<br>
					<a href="tel: (+572) 485 3453">Tel: (+572) 485 3453</a><br><br>
					<strong>Planta Renoboy Sabaleta</strong><br>
					Carrera 47 E N° 78C Sur - 95 Ciudadela Industrial ACIC<br>
					<a href="tel: (+574) 604 0368">Tel: (+574) 604 0368</a><br><br>
					<strong>Planta Renoboy Tubará</strong><br>
					Vía Tubará Kilómetro 11 Diagonal Relleno AAA<br>
					<a href="tel: (+575) 385 6034">Tel: (+575) 385 6034</a><br><br>
				</div>
				<div id="ancla" class="col-xs-12 hidden-md hidden-lg">			
					<button id="btn-mas-sedes" class="col-xs-offset-5 btn center-block">
						<p id="menos-sucursales">Más Sucursales</p>
						<span class="glyphicon glyphicon-chevron-down"></span>
						<span class="glyphicon glyphicon-chevron-up"></span>
					</button>
				</div>
			</div>
		</footer>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB19HfuwZ8B4Qtlrb8N38C_tTyUwCpa7m8&callback=initMap"
         async defer></script>
		
		<script type="text/javascript">
			
			$(document).ready(function(){
				var sucursalesabierto = false;
				$( "#btn-mas-sedes" ).click(function() {
					var $contenedor = $('#mas-sedes')
					$("#mas-sedes").slideToggle(700);
					$('html,body').animate({scrollTop: $("#ancla").offset().top}, 700);
					$("#btn-mas-sedes .glyphicon-chevron-up").toggle();
			    	$("#btn-mas-sedes .glyphicon-chevron-down").toggle();
			    	if (sucursalesabierto) {
						$("#menos-sucursales").text("Más Sucursales");
			    	} else {
			    		$("#menos-sucursales").text("Menos Sucursales");
			    	}
			    	sucursalesabierto = !sucursalesabierto;
				});
			});

			/********************************************
			*********************************************
							FUNCTIONS
			*********************************************	
			*********************************************/

			function initMap(){
			    var mapDiv = document.getElementById('map');
			    var map = new google.maps.Map(mapDiv, {
			      center: {lat: 4.6479, lng: -74.1236},
			      zoom: 15
			    });

				var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
				var marker = new google.maps.Marker({
				  position: {lat: 4.6479, lng: -74.1236},
				  animation:google.maps.Animation.BOUNCE,
				  map: map,
				  icon: iconBase + 'schools_maps.png'
				  //icon: '/img/iconoheader1.png'
				});

				map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(
				  document.getElementById('legend'));

				var infowindow = new google.maps.InfoWindow({
				  content:"Calle 17A 69F-56, Bogotá, Colombia"
				  });

				google.maps.event.addListener(marker, 'click', function() {
				  infowindow.open(map,marker);
				});


				// Zoom to 17 when clicking on marker
				google.maps.event.addListener(marker,'click',function() {
					map.setZoom(17);
					map.setCenter(marker.getPosition());
				});				

				// center on marker
				google.maps.event.addListener(map,'center_changed',function() {
				  window.setTimeout(function() {
				    map.panTo(marker.getPosition());
				  },3000);
				});

				// This event listener calls addMarker() when the map is clicked.
				/*
				google.maps.event.addListener(map, 'click', function(event) {
					addMarker(event.latLng, map);
				});
				
				/*
				var legend = document.getElementById('legend');
				for (var style in styles) {
				  var name = style.name;
				  var icon = style.icon;
				  var div = document.createElement('div');
				  div.innerHTML = '<img src="' + icon + '"> ' + name;
				  legend.appendChild(div);
				}
				*/

				/*
				map.set('styles', [
				  {
				    featureType: 'road',
				    elementType: 'geometry',
				    stylers: [
				      { color: '#000000' },
				      { weight: 1.6 }
				    ]
				  }, {
				    featureType: 'road',
				    elementType: 'labels',
				    stylers: [
				      { saturation: -100 },
				      { invert_lightness: true }
				    ]
				  }, {
				    featureType: 'landscape',
				    elementType: 'geometry',
				    stylers: [
				      { hue: '#ffff00' },
				      { gamma: 1.4 },
				      { saturation: 82 },
				      { lightness: 96 }
				    ]
				  }, {
				    featureType: 'poi.school',
				    elementType: 'geometry',
				    stylers: [
				      { hue: '#fff700' },
				      { lightness: -15 },
				      { saturation: 99 }
				    ]
				  },
					{
					  featureType: 'poi',
					  elementType: 'geometry',
					  stylers: [
					    { visibility: 'off' }
					  ]
					}, {
					  featureType: 'poi.school',
					  elementType: 'geometry',
					  stylers: [
					    { visibility: 'on' },
					    { hue: '#fff700' },
					    { lightness: -15 },
					    { saturation: 99 }
					  ]
					}
				]);
				*/
			}

			function placeMarker(location) {
			  var marker = new google.maps.Marker({
			    position: location,
			    map: map,
			  });
			  var infowindow = new google.maps.InfoWindow({
			    content: 'Latitude: ' + location.lat() +
			    '<br>Longitude: ' + location.lng()
			  });
			  infowindow.open(map,marker);
			}

			/********************************************
			*********************************************
							EVENTS
			*********************************************	
			*********************************************/



			$("#ayuda-utilizacion").click(function(){
				$(".ayuda-buscador-servicios").show(1000);
			});
			$(".btn-cerrar-ayuda-buscador").click(function(){
				$(".ayuda-buscador-servicios").hide(1000);
			});

		</script>