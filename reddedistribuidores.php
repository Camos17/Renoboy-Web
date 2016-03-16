		<?php include "header.php";?>
		<?php include "menu-fijo.php";?>

		<div class="col-xs-12 col-sm-12 col-md-12 no-padding">
			<div class="col-md-6 no-padding">
				<div id='map'></div>
				<div id="legend">
				  My first legend!
				</div>

			</div>
		</div>	
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB19HfuwZ8B4Qtlrb8N38C_tTyUwCpa7m8&callback=initMap"
         async defer></script>

		<script type="text/javascript">
			
			$(document).ready(function(){

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



		</script>		
		<?php include "footer.php";?>
	</body>	
</html>	