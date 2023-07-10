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


var_dump($data);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volume <?= $_GET["volume"]?></title>
</head>
<body>
<!-- <script>alert("Peringatan: Warna page terang");</script> -->
    


</body>
</html>