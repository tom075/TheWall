<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/upload_css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="upload_border">
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <?php include('uploadProcess.php'); ?>
        <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
        <input type="file" name="userimage" accept="image/*" onchange="preview_image(event)">
        <img src="css/upload_css/afb/Upload.svg" id="output_image"/>
        <br><br>
        <textarea rows="4" cols="50" name="omschrijving" form="usrform">Typ hier uw omschrijving... </textarea>
        <br>
        <input type="submit" name="submit" value="upload image">
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
