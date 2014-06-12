<!DOCTYPE html>
<html>
<head>
	<title>Tile Server Example</title>
	<meta charset="utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.1/leaflet.css" />
</head>
<body>
	<a href="https://github.com/thejeshgn/tileserver"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png" alt="Fork me on GitHub"></a>
	<div id="map" style="width: 800px; height: 800px"></div>	
</body>
	<script src="http://cdn.leafletjs.com/leaflet-0.7.1/leaflet.js"></script>
	<script>
		var map;


		var mbTiles = new L.tileLayer('server_mb.php?z={z}&x={x}&y={y}', {
		    tms: true,
		    attribution: 'OpenStreetMap, Mobac - MB Tiles',
		    opacity: 0.7
		});
		var rmTiles = new L.tileLayer('server_rm.php?z={z}&x={x}&y={y}', {
		    attribution: 'OpenStreetMap, Mobac RM Tiles',
		    opacity: 0.7,
		    zoomReverse: true,
		    continuousWorld: true,
		    noWrap:true,
		});

		map = new L.Map("map",{
			zoom: 16,
		        center: [12.83563,77.68312],
			layers: [mbTiles]
		});

	</script>

</html>
