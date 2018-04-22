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
    <title>beheren</title>
</head>
<body>

<?php
//database interactie


require("../../../private/thewall_db.php");

// connect
$dbc = mysqli_connect(HOST, USER, PASS, DB);
//query maken
$query = "SELECT * FROM login_TheWall";
// uitvoeren
$result = mysqli_query($dbc, $query) or die ('kan resultaten niet naar voren halen');


echo "<table>";


// mailen met een while loop

echo "<tr>";
echo "<td>ID:</td><td>Gebruikersnaam:</td><td>Mailadres:</td></td>";
echo "</tr>";


while ($row = mysqli_fetch_array($result)) {


    $id = $row['id'];
    $username = $row['username'];
    $username = htmlentities($username);
    $mailadres = $row['email'];
    $mailadres = htmlentities($mailadres);


    echo "<tr>";
    echo "<td>$id</td><td>$username</td><td>$mailadres</td></td>";

    echo "<td>";
    echo '<a href="delete.php?id=' . $id . '">DELETE</a>';
    echo "</td>";
    echo "<td>";
    echo '<a href="edit.php?id=' . $id . '&username=' . $username  . '&mailadres=' . $mailadres . ' ">EDIT</a>';
    echo "</td>";
    echo "</tr>";

}
echo "</table>";
mysqli_close($dbc);
?>
<br> <br> <a href='index.php'>klik hier om terug te gaan</a>
</body>
</html>