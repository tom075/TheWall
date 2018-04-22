<?php
require ("code/session.php");
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/upload_css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Wall - Upload</title>
    <link rel="icon" type="image/png" href="css/icon/icon.png" />

</head>
<body>

<div class="upload_border">
    <h1>upload afbeelding</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <?php include('uploadProcess.php'); ?>
        <input type="hidden" name="MAX_FILE_SIZE" value="20000000000">
        <input type="file" name="userimage" accept="image/*" onchange="preview_image(event)">
        <img src="css/upload_css/afb/Upload.svg" id="output_image"/>
        <br><br>
        <textarea name="omschrijving" cols="40" rows="5"></textarea>
        <br><br>
        <a href="index.php" class="cancel">cancel</a>
        <input class="upload_submit" type="submit" name="submit" value="upload afbeelding">


    </form>
</div>

</body>
<script>
    function preview_image(event) {
        var reader = new FileReader();
        reader.onload = function () {
            var output = document.getElementById('output_image');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }



</script>
</html>
