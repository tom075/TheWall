<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
require ("../../private/thewall_db.php");

$dbc = mysqli_connect(HOST, USER, PASS, DB );

$query = "SELECT locatie FROM image_TheWall";

$result = mysqli_query($dbc, $query) or die ('gaat niet goed');

while ($row = mysqli_fetch_array($result)){
    $locatie = $row['locatie'];

    echo '<img class="plaatjes" src="' . $locatie . '" />';
}
?>


</body>
</html>
