<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
			html, body, #map-canvas { height: 100%; margin: 0; padding: 0;}
		</style>
		<script type="text/javascript"
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfg9SWlMD6ClfWAoBflTvb7IU0Yf11LkE">
		</script>
		<script type="text/javascript">
			var myCenter = new google.maps.LatLng( 25.033408, 121.564099);
			//var myCenter = new google.maps.LatLng( 51.508742, -0.120850 );
			
			function initialize() {
				var mapOptions = { center:myCenter, zoom:15, mapTypeId:google.maps.MapTypeId.ROADMAP };

				var map = new google.maps.Map( 
					document.getElementById('map-canvas'),
					mapOptions);
					
				var marker=new google.maps.Marker({ position:myCenter, animation:google.maps.Animation.BOUNCE});
				marker.setMap(map);
			}

			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
	</head>
  
	<body>
		<div id="map-canvas" style="width:500px;height:380px;"></div>
	</body>
</html>