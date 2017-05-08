<?php
$name = htmlspecialchars($_POST['name']);
$surname = htmlspecialchars($_POST['surname']);
$keywords = htmlspecialchars($_POST['keywords']);
$query = new mysqli("localhost", "root", "", "cv");

if (mysqli_connect_errno()) {
    echo "Բազաին չի կպել" . mysqli_connect_error();
    exit();
}
$table = '<table border="2px">
<thead>
<tr>
<th>Name</th>
<th>Surname</th>
<th>Keywords</th>
<th>CV</th>
</tr>
</thead>
<tbody>
';
if ($query = mysqli_query($query, "SELECT * FROM user where user.name like '%$name%' and user.surname like '%$surname%' and user.keywords like '%$keywords%'")) {
    while ($row = $query->fetch_assoc()) {
        $table .= '<tr>';
        $n = str_replace($name, '<b>' . $name . '</b>', $row["name"]);
        $s = str_replace($surname, '<b>' . $surname . '</b>', $row["surname"]);
        $k = str_replace($keywords, '<b>' . $keywords . '</b>', $row["keywords"]);

        $table .= '<td>' . $n . '</td>' . '<td>' . $s . '</td>' . '<td>' . $k . '</td>' . '<td>';
        $table .= '<a " href="download.php?id=' . $row['id'] . '">Download</a>';
        $table .= '</td>';
        $table .= '</tr>';
    }
    $table .= '</tbody></table>';
    echo $table;
}



