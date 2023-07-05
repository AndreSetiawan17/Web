<?php
require "koneksi.php";

$file = '.env';
$content = file_get_contents($file);

// Menampilkan isi file
echo $content;

?>