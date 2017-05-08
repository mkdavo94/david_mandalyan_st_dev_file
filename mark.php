<?php include_once "header.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mandalyan</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="js/rezume.js"></script>
</head>
<body>
<div class="reg">
    <form action="" method="post" id="form">
        <p><label for="name">ԱՆՈՒՆ<span>*</span></label></p>
        <p><input type="text" id="name" name="name"></p>
        <p><label for="surname">ԱԶԳԱՆՈՒՆ <span>*</span></label></p>
        <p><input type="text" id="surname" name="surname">
        <p><label for="keywords">ԲՆՈՒԹԱԳՐՈՂ ՀՄՏՈՒԹՅՈՒՆՆԵՐ<span>*</span></label></p>
        <p><input type="text" name="keywords" id="keywords">
        <div id="message"></div>
        <input type="button" id="send" class="click" value="Որոնել">
    </form>
</div>
</body>


