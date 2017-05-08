<?php
$query = new mysqli("localhost", "root", "", "cv");
$id = $_GET['id'];
if (mysqli_connect_errno()) {
    echo "Բազաին չի կպել" . mysqli_connect_error();
    exit();
}
if ($query = mysqli_query($query, "SELECT * FROM user where id='$id'")) {
    $row = $query->fetch_assoc();
    $file = $row['cv_path'];
    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
    }
}
