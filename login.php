<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/login_css/style.css">
    <meta charset="utf-8">
    <title>Huisje</title>
</head>
<body>
<div class="wrapper">
    <!-- Button to open the modal login form -->
    <button id="clickButton" onclick="document.getElementById('id01').style.display='block'">Login</button>

    <!-- The Modal -->
    <div id="id01" class="modal">
          <span onclick="document.getElementById('id01').style.display='none'"

        <!-- Modal Content -->
        <form class="modal-content animate" action="login.php">
            <?php include('errors.php'); ?>
            <div class="container">
                <div class="input-group">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="username" required autofocus>
                </div>

                <div class="input-group">
                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>
                </div>

                <div>
                    <button class="cancelbtn" type="submit">Login</button>
                </div>
            </div>

            <p>
                Not yet a member? <a href="register.php">Sign up</a>
            </p>
        </form>
    </div>
    <canvas onmouseover="myFunction()" id="canvas" style="background-color: transparent;"></canvas>
</div>
<script src="js/script.js" charset="utf-8"></script>
<script>

    function myFunction() {
        document.getElementById("clickButton").click();
    }
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }





}
</script>
</body>
</html>
