<?php
require __DIR__ . "/../function.php";
require __DIR__ . "/../koneksi.php";


$db = "jare";

$query = "INSERT INTO $db (title) VALUES ('Ini Judul2') ";



mysqli_query($conn,$query);




echo "\n";?>
