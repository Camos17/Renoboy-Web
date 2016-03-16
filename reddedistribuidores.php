		<?php include "header.php";?>
		<?php include "menu-fijo.php";?>

		<div class="col-xs-12 col-sm-12 col-md-12 no-padding">
			<div class="col-md-3 no-padding">
				<div class="col-lg-10 searchcoords">
					<input type="text" class="form-control" name="latitud" placeholder="Latitud">
					<input type="text" class="form-control" name="longitud" placeholder="Longitud">
					<a class="btn btn-default btn-buscar-coords col-xs-12" id='anchorCoords'>BUSCAR MAS CERCANO</a>
				</div>
				<div class="col-xs-12 no-padding col-md-8 visible-md visible-lg texto-sedes2" style='margin-top: 250px;'>
					<div class="col-md-12">
						<p class="text-center">
							<strong>Terminal de Transporte Bogotá</strong><br>
							Latitud: 4.6556863 <br>
							<a href="tel: (+574) 604 0368">Longitud: -74.1169391 </a><br><br>
							<strong>Terminal de Transporte Medellin</strong><br>
							Latitud: 6.2481172 <br>
							<a href="tel: (+574) 604 0368">Longitud: -75.6135184</a><br><br>
							<strong>Terminal de Transporte Yumbo</strong><br>
							Latitud: 3.5457313<br>
							<a href="tel: (+572) 485 3453">Longitud: -76.5046236</a><br><br>
						</p>
					</div>				
				</div>
			</div>
			<div class="col-md-9 no-padding">
				<div id='map'></div>
			</div>
		</div>	
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB19HfuwZ8B4Qtlrb8N38C_tTyUwCpa7m8&callback=initMap"
         async defer></script>

		<script type="text/javascript">
			
			/********************************************
			*********************************************
							FUNCTIONS
			*********************************************	
			*********************************************/

			function initMap(){
			    var mapDiv = document.getElementById('map');
			    var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';

			    // Initialize map with center
			    var map = new google.maps.Map(mapDiv, {
			      center: {lat: 4.6479, lng: -74.1236},
			      zoom: 7
			    });				

			    // Marker : Bogota
				var markerBog = new google.maps.Marker({
				  position: {lat: 4.6479, lng: -74.1236},
				  animation:google.maps.Animation.BOUNCE,
				  map: map,
				  icon: iconBase + 'schools_maps.png'
				});
				var infoBog = new google.maps.InfoWindow({
				  content:"Calle 17A 69F-56, Bogotá, Colombia"
		  		});

			    // Marker : Medellin
				var markerMed = new google.maps.Marker({
				  position: {lat: 6.149459, lng: -75.625685},
				  animation:google.maps.Animation.BOUNCE,
				  map: map,
				  icon: iconBase + 'schools_maps.png'
				});
				var infoMed = new google.maps.InfoWindow({
				  content:"Carrera 47 E N° 78C Sur - 95, Sabaneta, Colombia"
				  });

			    // Marker : Yumbo
				var markerYum = new google.maps.Marker({
				  position: {lat: 3.5533536, lng: -76.5002322},
				  animation:google.maps.Animation.BOUNCE,
				  map: map,
				  icon: iconBase + 'schools_maps.png'
				});
				var infoYum = new google.maps.InfoWindow({
				  content:"Carrera 20G N° 14B - 36 Yumbo, Colombia"
				  });


				// Click event on marker
				google.maps.event.addListener(markerBog,'click',function() {
					map.setZoom(14);
					map.setCenter(markerBog.getPosition());
					infoBog.open(map,markerBog);
				});				

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



		</script>		
		<?php include "footer.php";?>
	</body>	
</html>	