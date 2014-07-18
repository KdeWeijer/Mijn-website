<!DOCTYPE html>
<html>
  <head>
  	<title>ContactPagina</title>
		<link href="site.css" rel="stylesheet">
    <style>
      #map_canvas {
        width: 500px;
        height: 400px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(44.5403, -78.5463),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
  	<div><?php include("banner.php");
	echo $banners[0] ?></div>
		<?php include("header.php"); ?>
			<h1>Welkom op de contactpagina</h1>
			
    <div id="map_canvas"></div>
		<?php include("footer.php"); ?>
  </body>
</html>