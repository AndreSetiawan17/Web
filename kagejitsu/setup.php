<?php
require "../koneksi.php";
require "func.php";
require "cons.php";

$format_cover = get_ekstensi_file("cover","aset/");
$seti         = get_segment_and_stitle($_ENV["NOVEL"]);