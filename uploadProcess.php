
<?php


$temp_location = $_FILES['userimage']['tmp_name'];
$target_location = 'images/' . time() . $_FILES['userimage']['name'] ;

$omschrijving = $_POST['omschrijving'];

if ($_FILES['userimage']['size'] < 2000000)
{
    $result = move_uploaded_file($temp_location, $target_location);


} else {
    echo "het bestand is veel te groot.";
}

if ($result){
    require ('../../private/thewall_db.php');
    $dbc = mysqli_connect(HOST, USER, PASS, DB);
    $query = "INSERT INTO image_TheWall VALUES (0, '$naam', '$omschrijving', '$target_location')";
    $result = mysqli_query($dbc, $query);

    mysqli_close($dbc);

    echo "uw afbeelding is geupload";
}
?>

