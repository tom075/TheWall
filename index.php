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
    <form class="login" method="post" action="verwerk/verwerk_login.php">
        <input class="login_input" type="text" placeholder="gebruikersnaam" name="naam">
        <br><br>
        <input class="login_input" type="password" placeholder="wachtwoord" name="wachtwoord">
        <br><br>
        <input type="submit" class="login_submit" name="login_user" value="login">
    </form>
    <div class="login_links">
        <h2><a href="gast.php">ga verder als gast</a></h2>
        <br>
        <a class="login_register" href="register.php">registeren? (klik hier)</a>
    </div>
</div>


</body>
</html>