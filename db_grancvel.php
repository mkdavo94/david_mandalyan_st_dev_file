<?php
$target_dir = dirname(getcwd());
$random = base64_encode(random_bytes(10));

$target_file = $target_dir . '\\st_dev\\img\\' . $random . basename($_FILES["cv_file"]["name"]);
$uploadOk = 1;
if ($_FILES["cv_file"]["size"] > 50000000) {
    echo "Ֆայլի չափսը մեծ է.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Բեռնեք ֆայլը";
} else {
    if (move_uploaded_file($_FILES["cv_file"]["tmp_name"], $target_file)) {
        $name = htmlspecialchars($_POST['name']);
        $surname = htmlspecialchars($_POST['surname']);
        $keywords = htmlspecialchars($_POST['keywords']);
        $mysqli = new mysqli("localhost", "root", "", "cv");
        $path = quotemeta($target_file);
        if (mysqli_connect_errno()) {
            echo "Բազաին չի կպել" . mysqli_connect_error();
            exit();
        }
        if ($mysqli = mysqli_query($mysqli, "INSERT INTO user (name, surname,keywords, cv_path)
                              VALUES ('$_POST[name]','$_POST[surname]','$_POST[keywords]','$path')")
        ) {
            echo "<h3>Հաջողությամբ գրանցվել եք</h3><br/><a href='index.php'>Veradarnal</a>";
        }
    } else {
        echo "Փորձեք բեռնել կռկին ";
    }
}




