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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Wall - Nieuwsbrief</title>
</head>
<body>
<form method="POST" action="verwerk_verzending.php">
    <input type="text" name="subject"><br><br>
    <textarea name="message" cols="30" rows="10"></textarea><br>
    <input type="submit" name="submit" value="submit">

</form>
</body>
</html>