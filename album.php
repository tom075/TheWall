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
    <a href="album.php">Home</a>
    <a href="upload.php">upload</a>
    <a href="">mijn foto's</a>
    <a href="">contact</a>
    <a href="login.php">log uit</a>


    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>


<?php
require("../../private/thewall_db.php");

$dbc = mysqli_connect(HOST, USER, PASS, DB);

$query = "SELECT * FROM image_TheWall";

$result = mysqli_query($dbc, $query) or die ('gaat niet goed');


echo '<div class="wrapper">';

while ($row = mysqli_fetch_array($result)) {
//    var_dump($row);
    $locatie = $row['locatie'];
    $id = $row['id'];
    $omschrijving = $row['omschrijving'];

//    $omschrijving = $row['omschrijving'];


    echo "<button id='modalBtn" . $id . "' class='button'><img src='" . $locatie . "' alt=''></button>";

    echo "<div id='simpleModal" . $id . "' class='modal'>
    <div class='modal-content'>
        <div class='modal-header'>
            <span class='closeBtn" . $id . "'>&times;</span>
            <h2>modal header</h2>
        </div>
        <div class='modal-body'>
            <img id='image_groot' src='" . $locatie . "' alt=''>
            <p>" . $omschrijving . "</p>
        </div>
        <div class='modal-footer'>
            <h3>modal footer</h3>
        </div>
    </div>
</div>
<script>
//Get modal elements
var modal".$id." = document.getElementById('simpleModal".$id."');
//get modal button

var modalBtn".$id." = document.getElementById('modalBtn".$id."');

//close button
var closeBtn".$id." = document.getElementsByClassName('closeBtn".$id."')[0];

//listen for a click
modalBtn".$id.".addEventListener('click', openModal".$id.");

//listen for close
closeBtn".$id.".addEventListener('click', closeModal".$id.");
//outside click
window.addEventListener('click', clickOutside".$id.");

//funcite open modal
function openModal".$id."() {
    modal".$id.".style.display = 'block';
}

//funcite close modal
function closeModal".$id."() {
    modal".$id.".style.display = 'none';
}



</script>

";

}
echo '</div>';
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
<script src="js/main.js"></script>
</body>
</html>

