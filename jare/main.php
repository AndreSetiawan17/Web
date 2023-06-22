<?php
require "../function.php";
require "../koneksi.php";


// $conn = mysqli_connect("localhost", "andre", "inIpassword@1","mydb");
$hari = ["Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu","Minggu"];

$jadwal = query("SELECT * FROM jare");




$count = [];
foreach ( $jadwal as $j ) {
    $count[] = strtolower($hari[$j["day"]]);
} $count = array_count_values($count);





?>
