<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/login_css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta charset="utf-8">
    <title>The Wall - Login</title>
</head>
<body>
<div class="wrapper">
    <div id="id01" class="modal">

        <div class="container">

            <form class="modal-content animate" action="login.php" method="post">
            <?php include('errors.php'); ?>
                <div class="input-group">
                <label>Gebruikersnaam</label>
                <input type="text" name="username" required autofocus>
            </div>
            <div class="input-group">
                <label>Wachtwoord</label>
                <input type="password" name="password" required>
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="login_user">Login</button>
            </div>
                <div class="register">
            <p>
                Heeft u nog geen account? <a href="register.php">Maak hier een account aan!</a>
            </p>
                <p>
                    <a href="gast.php">ga door als gast </a>
                </p>
                </div>
            </form>
    </div>
    </div>
    <canvas  id="canvas" ></canvas>
</div>
<script src="js/script.js" charset="utf-8"></script>
<script>


var modal = document.getElementById('id01');

function openModal() {
    setTimeout(function () {
       modal.style.display="block";
    }, 1);
}


openModal();



</script>
</body>
</html>

