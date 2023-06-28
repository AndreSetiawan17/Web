<?php
require "../koneksi.php";
require "../func.php";
session_start();

$err = verify();

echo "<br>ERROR CODE --->> ";
var_dump($err);

// if ( $err == 1 ) {
//     header('Location: crud/');
// } elseif ( $err == -2 || $err == -3 ) {
//     header('Location: ../');
// } elseif ( $err === -1 ) {
//     header('Location: ../account/');
// }

?>