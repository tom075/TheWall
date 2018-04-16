
<?php


$username = $_SESSION['username'];
$username = htmlentities($username);

$temp_location = $_FILES['userimage']['tmp_name'];
$target_location = 'images/' . time() . $_FILES['userimage']['name'] ;

$omschrijving = $_POST['omschrijving'];
$omschrijving = htmlentities($omschrijving);

if ($_FILES['userimage']['size'] < 5000000)
{
    $result = move_uploaded_file($temp_location, $target_location);


} else {
    echo "het bestand is veel te groot.";
}

if ($result){
    require ('../../private/thewall_db.php');
    $dbc = mysqli_connect(HOST, USER, PASS, DB);
    $query = "INSERT INTO image_TheWall VALUES (0, '$username', '$omschrijving', '$target_location')";
    $result = mysqli_query($dbc, $query);

    mysqli_close($dbc);
    header("location: index.php");
}
?>

