<?php
$zoom = $_GET['z'];
$tile_column = $_GET['x'];
$tile_row = $_GET['y'];
$conn = new PDO("sqlite:mb.mbtiles");
$sql = "SELECT * FROM tiles WHERE zoom_level = $zoom AND tile_column = $tile_column AND tile_row = $tile_row";


$q = $conn->prepare($sql);
$q->execute();

$q->bindColumn(1, $zoom_level);
$q->bindColumn(2, $tile_column);
$q->bindColumn(3, $tile_row);
$q->bindColumn(4, $tile_data, PDO::PARAM_LOB);

while($q->fetch())
{
	header("Content-Type: image/jpg");
	echo $tile_data;
}
?>
