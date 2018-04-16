<?php
$id = $_GET['id'];
$locatie = $_GET['locatie'];

require("../../private/thewall_db.php");

// connect
$dbc = mysqli_connect(HOST, USER, PASS, DB);

unlink($locatie);
$query = "DELETE FROM image_TheWall WHERE id = '$id' ";
$result = mysqli_query($dbc, $query) or die ('kan resultaten niet naar voren halen');

header("location: mijnfotos.php ");
