<?php
$zoom = $_GET['z'];
$tile_column = $_GET['x'];
$tile_row = $_GET['y'];

$conn = new PDO("sqlite:rm.sqlitedb");
$sql = "SELECT * FROM tiles WHERE z = $zoom AND x = $tile_column AND y = $tile_row";

$q = $conn->prepare($sql);
$q->execute();

$q->bindColumn(1, $zoom_level);
$q->bindColumn(2, $tile_column);
$q->bindColumn(3, $tile_row);
$q->bindColumn(5, $tile_data, PDO::PARAM_LOB);

while($q->fetch())
{
	header("Content-Type: image/jpg");
	echo $tile_data;
}
?>
