<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/album_css/style.css">
    <link rel="stylesheet" href="css/navbar_css/style.css">
    <title>Document</title>
</head>


<div class="navbar" id="navbar">
    <a href="gast.php">Home</a>
    <a href="">contact</a>
    <a href="backup/index.php">login</a>

    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>


<?php
require ("../../private/thewall_db.php");

$dbc = mysqli_connect(HOST, USER, PASS, DB );

$query = "SELECT locatie FROM image_TheWall";

$result = mysqli_query($dbc, $query) or die ('gaat niet goed');

echo '<div class="wrapper">';

while ($row = mysqli_fetch_array($result)){
    $locatie = $row['locatie'];



    echo '<img class="image" src="' . $locatie . '" />';
}
echo '</div>'


?>

<script>
    function myFunction() {
        var x = document.getElementById("navbar");
        if (x.className === "navbar") {
            x.className += " responsive";
        } else {
            x.className = "navbar";
        }
    }
</script>
</body>
</html>
