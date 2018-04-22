


<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/login_css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="css/icon/icon.png" />

    <title>The Wall - Register</title>
</head>
<body>
<div class="wrapper">
    <div id="id01" class="modal">

        <div class="container">

            <form class="modal-content animate" action="register.php" method="post">
                <?php include('errors.php'); ?>
                <div class="input-group">
                    <label>Gebruikersnaam</label>
                    <input type="text" name="username" value="<?php echo $username; ?>">
                </div>
                <div class="input-group">
                    <label>Email</label>
                    <input type="email" name="email" value="<?php echo $email; ?>">
                </div>
                <div class="input-group">
                    <label>Wachtwoord</label>
                    <input type="password" name="password_1">
                </div>
                <div class="input-group">
                    <label>Herhaal Wachtwoord</label>
                    <input type="password" name="password_2">
                </div>
                <div class="input-group">
                    <button type="submit" class="btn" name="reg_user">maak uw account</button>
                </div>
                <div class="register">
                    <p>
                        Heeft u al een account? <a href="login.php">log hier in!</a>
                    </p>
                    <p>
                        <a href="gast.php">of ga door als gast </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <canvas id="canvas"></canvas>
</div>
<script src="js/script.js" charset="utf-8"></script>
<script>


    var modal = document.getElementById('id01');

    function openModal() {
        setTimeout(function () {
            modal.style.display = "block";
        }, 1);
    }


    openModal();


</script>
</body>
</html>

