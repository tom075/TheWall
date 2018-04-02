<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login_css/style.css">
    <title>The Wall</title>
</head>
<body>



<div class="login_border">
    <h1>The Wall</h1>
    <form method="post" action="verwerk/verwerk_register.php">
        <input class="login_input" type="text" placeholder="gebruikersnaam" name="naam">
        <br><br>
        <input class="login_input" type="email" placeholder="emailadres" name="mailadres" >
        <br><br>
        <input class="login_input" type="password" placeholder="wachtwoord" name="wachtwoord_1">
        <br><br>
        <input class="login_input" type="password" placeholder="herhaal wachtwoord" name="wachtwoord_2">
        <br><br>
        <input type="submit" class="login_submit" name="login_user" value="registreer">
    </form>
    <div class="login_links">
        <h2><a href="gast.php">ga verder als gast</a></h2>
        <br>
        <a class="login_register" href="index.php">heeft u al een account (klik hier)</a>
    </div>
</div>
</body>
</html>

