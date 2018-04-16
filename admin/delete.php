<?php
$id = $_GET['id'];

require("../../../private/thewall_db.php");

// connect
$dbc = mysqli_connect(HOST, USER, PASS, DB);


$query = "DELETE FROM login_TheWall WHERE id = '$id' ";
$result = mysqli_query($dbc, $query) or die ('kan resultaten niet naar voren halen');

header("location: beheren.php ");
