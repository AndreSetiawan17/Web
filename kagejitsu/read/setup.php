<?php
if ( 
    !isset($_GET["volume"]) &&
    !is_numeric($_GET["volume"]) &&
    !isset($_GET["segment"])
) { header("Location: ../"); }

require __DIR__ . "/../../koneksi.php";

$tenv   = $_ENV['NOVEL'];
$volume  = mysqli_real_escape_string($conn, $_GET["volume"]);
$segment = mysqli_real_escape_string($conn, $_GET["segment"]);
$data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM $tenv WHERE volume=1 AND segment='prolog'"));
// $data = extrax("SELECT * FROM $tenv WHERE volume=$volume AND segment='$segment'");