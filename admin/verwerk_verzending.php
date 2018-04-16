<?php

require("../../../private/thewall_db.php");



// data uitlezen
$subject = $_POST['subject'];
$subject = htmlentities($subject);

$message = $_POST['message'];
$message = htmlentities($message);

//database interactie



// connect
$dbc = mysqli_connect(HOST, USER, PASS, DB);
//query maken
$query = "SELECT email FROM login_TheWall";
// uitvoeren
$result = mysqli_query($dbc, $query) or die ('kan resultaten niet naar voren halen0-990 ');



// mailen met een while loop
while ($row = mysqli_fetch_array($result)){
    echo $row['email'] . "<br>";

    $to = $row['email'];
    $headers = 'from: volnion@volnion.nl';

    mail($to,$subject,$message,$headers);

}
echo 'klaar met verzenden';

mysqli_close($dbc);