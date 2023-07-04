<?php
require "koneksi.php";

$title = "Oshi no Ko";
$a = mysqli_query($conn, "SELECT title FROM alpha WHERE title = '$title'");
$a = mysqli_fetch_assoc($a);
var_dump($a);

// $time = "ss:sqs";
// $t = date('h:i', strtotime($time));

// var_dump($t);

?>