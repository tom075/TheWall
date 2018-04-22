<?php
session_start();

if ($_SESSION['username'] != 'admin'){
    header('location: ../login.php');

}
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
}

?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/admin/style.css">
    <title>The Wall - Admin</title>
</head>
<body>

<a href="versturen.php">Nieuwsbrief versturen</a><br>
<a href="beheren.php"> Gebruikers beheren</a><br>
<a href="verwijder.php"> foto's beheren</a><br>
<a href="../index.php"> Home</a><br>


</body>
</html>