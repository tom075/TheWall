<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
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
    <a href="index.php">log uit</a>


    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<?php if (isset($_SESSION['success'])) : ?>
    <div class="error success" >
        <h3>
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </h3>
    </div>
<?php endif ?>

<!-- logged in user information -->
<?php  if (isset($_SESSION['username'])) : ?>
    <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
<?php endif ?>


<?php
require ("../../private/thewall_db.php");

$dbc = mysqli_connect(HOST, USER, PASS, DB );

$query = "SELECT * FROM image_TheWall";

$result = mysqli_query($dbc, $query) or die ('gaat niet goed');

echo '<div class="wrapper">';

while ($row = mysqli_fetch_array($result)){
    $locatie = $row['locatie'];
    $omschrijving = $row['omschrijving'];



    echo '<img class="image" src="' . $locatie . '" />';
}
echo '</div>'
?>

<script>
    function myFunction() {
        var x = document.getElementById("navbar");
        if (x.className === "navbar") {
            x.className += "responsive";
        } else {
            x.className = "navbar";
        }
    }
</script>
</body>
</html>
