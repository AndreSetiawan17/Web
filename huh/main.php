<?php
session_start();
require "../koneksi.php";






$kunci = bin2hex(random_bytes(1));
$result = mysqli_fetch_assoc(mysqli_query($conn ,"SELECT kunci FROM session WHERE id = 1"))["key"];


if ( !$result ) { echo '<h1>Yeay1</h1>';; }
elseif ( $kunci !== $result ) { echo '<h1>Yeay2</h1>';; }

var_dump($result)


?>