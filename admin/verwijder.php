<?php


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/admin/style.css">

    <title>The Wall - foto's </title>
</head>
<body>
<a href="index.php">ga terug</a>



<?php
require("../../../private/thewall_db.php");



$dbc = mysqli_connect(HOST, USER, PASS, DB);

$query = "SELECT * FROM image_TheWall  ";

$result = mysqli_query($dbc, $query) or die ('gaat niet goed');

echo '<div class="wrapper">';
echo "<table>";
while ($row = mysqli_fetch_array($result)) {
    $locatie = $row['locatie'];
    $id = $row['id'];


    echo "<tr>";
    echo "<td><img class='image' src='../" . $locatie . "' alt=''></td><td><a href='verwijderFoto.php?id=" . $id . "&locatie=". $locatie . "'>DELETE</a></td></td>";
    echo "</tr>";

}
echo "</table>";
echo '</div>';
?>

</body>
</html>
