<?php
session_start();

require "../../koneksi.php";
require "../../func.php";
require "crud.php";

$table_dbname = $_ENV["JARE"];

$month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
$days = ["None","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu","Minggu"];