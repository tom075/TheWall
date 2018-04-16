<?php

require("../../../private/thewall_db.php");

$id = $_POST['id'];
$username = $_GET['username'];
$username = htmlentities($username);

$mailadres = $_GET['mailadres'];
$mailadres = htmlentities($mailadres);



$id = $_GET['id'];
$dbc = mysqli_connect(HOST, USER, PASS, DB);


$query = "UPDATE login_TheWall";
$query .= " SET username = '$username' ,email = '$mailadres'";
$query .= "WHERE id = '$id'";
$result = mysqli_query($dbc, $query) or die ('kan resultaten niet naar voren halen');

header("location: beheren.php ");