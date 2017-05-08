<?php include_once "header.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mandalyan</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="js/grancvel.js"></script>

</head>
<body>
<div class="reg">
    <form action="db_grancvel.php" method="post" id="form" enctype="multipart/form-data"
          onsubmit="return registrationValidation();">
        <p><label for="name">ԱՆՈՒՆ<span>*</span></label></p>
        <p><input type="text" id="name" name="name"></p>
        <p><label for="surname">ԱԶԳԱՆՈՒՆ <span>*</span></label></p>
        <p><input type="text" id="surname" name="surname">
        <p><label for="keywords">ԲՆՈՒԹԱԳՐՈՂ ՀՄՏՈՒԹՅՈՒՆՆԵՐ <span>*</span></label></p>
        <p><input type="text" name="keywords" id="keywords">
        <p><label for="cv_file">ՌԵԶՅՈՒՄԵ <span>*</span></label></p>
        <p><input type="file" name="cv_file" id="cv_file" accept=".doc,.txt,.pdf,.text,.docx">
        <div id="message"></div>
        <input type="submit" id="send" class="click" value="Գրանցել">
    </form>

</div>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
