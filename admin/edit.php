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
    <title>The Wall - Edit</title>
</head>
<body>
<?php
$id = $_GET['id'];
$username = $_GET['username'];
$username = htmlentities($username);

$mailadres = $_GET['mailadres'];
$mailadres = htmlentities($mailadres);

echo "<h2> Edit id $id</h2>"
?>
<form action="verwerk_edit.php" method="get">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label> Gebruikersnaam:
        <input type="text" name="username" value="<?php echo $username;?>"></label><br>
    <label> Mailadres:
        <input type="text" name="mailadres" value="<?php echo $mailadres;?>"></label><br><br>
    <input type="submit" name="submit" value="verder">
</form>

</body>
</html>
