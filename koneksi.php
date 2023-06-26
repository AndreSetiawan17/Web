<?php
$host     = "localhost";
$username = "andre";
$password = "inIpassword@1";
$database = "PersonalWebsite";

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>