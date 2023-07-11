<?php
if ( 
    !isset($_GET["volume"]) &&
    !is_numeric($_GET["volume"]) &&
    !isset($_GET["segment"])
) { header("Location: ../"); }

require __DIR__ . "/../../koneksi.php";
require __DIR__ . "/../../func.php";

$tdata   = $_ENV['NOVEl'];
$volume  = mysqli_real_escape_string($conn, $_GET["volume"]);
$segment = mysqli_real_escape_string($conn, $_GET["segment"]);
$data = extrax("SELECT * FROM $tdata WHERE volume=$volume AND segment='$segment'");