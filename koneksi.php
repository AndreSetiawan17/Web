<?php
require 'composer/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host     = $_ENV["DB_HOST"];
$username = $_ENV["DB_USERNAME"];
$password = $_ENV["DB_PASSWORD"];
$database = $_ENV["DB_USE"];

$conn = mysqli_connect($host, $username, $password, $database);
if (!$conn) { die("Koneksi database gagal: " . mysqli_connect_error()); }

function extrax($text) {
    global $conn;
    $result = mysqli_query($conn,$text);
    $arr = [];
    while ( $i = mysqli_fetch_assoc($result)) {
        $arr[] = $i;
    } return $arr;
}