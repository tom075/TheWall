<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/contact_css/style.css">
    <link rel="stylesheet" href="css/navbar_css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="icon" type="image/png" href="css/icon/icon.png" />

    <title>The Wall - Contact</title>
</head>

<body>
<div class="navbar" id="navbar">
    <a href="index.php">home</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<h1>PROJECT: THE WALL</h1>
<h2>Gemaakt door: Tom Folkers en Merlijn Busch</h2>

<div class="wrapper">
<h2>contact:</h2>
<h3>Email: volnion@volnion.nl          </h3>
<h3>School: Mediacollege Amsterdam</h3>
<h3>Opleiding: Media Developer Niveau 4</h3>
</div>
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
</body>

