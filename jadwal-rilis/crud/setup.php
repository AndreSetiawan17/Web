<?php
session_start();

require "../../koneksi.php";
require "../../func.php";
require "crud.php";

$table_dbname = $_ENV["JARE"];

$month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
$days = ["None","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu","Minggu"];


$musim = match (intval(date("n"))) {
    3 , 4 , 5  => "Spring" ,
    6 , 7 , 8  => "Summer" ,
    9 , 10, 11 => "Fall"   ,
    12, 1 , 2  => "Winter" ,
    default    => "Error"  ,
};