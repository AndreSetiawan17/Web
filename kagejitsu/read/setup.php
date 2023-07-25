<?php
if (
    !isset($_GET["volume"]) &&
    !is_numeric($_GET["volume"]) &&
    !isset($_GET["segment"])
) { header("Location: ../"); }

require __DIR__ . "/../../koneksi.php";
require __DIR__ . "/../func.php";

$table   = "kate";//$_ENV['NOVEL'];
$volume  = mysqli_real_escape_string($conn, $_GET["volume"]);
$segment = mysqli_real_escape_string($conn, $_GET["segment"]);
$data    = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM $table WHERE volume=$volume AND segment='$segment'"));



// Ubah menjadi sebuah fungsi -> Later

// Mengantisipasi jika data yang dibutuhkan tidak ada pada database
if ($data["volume"   ] === null ||
    $data["segment"  ] === null ||
    $data["segment"  ] === null ||
    $data["title"    ] === null ||
    $data["paragraph"] === null 
) { header("Location: ../"); }

$replace = [
    ["u201c", "“" ], 
    ["u201d", "”" ], 
    ["u2013", "–" ], 
    ["u2014", "—" ], 
    ["u2018", "‘" ], 
    ["u2019", "’" ], 
    ["u2026","..."]
]; $data["paragraph"] = json_decode($data["paragraph"]);
// var_dump($data["paragraph"]);exit;
for ( $i = 0; $i < count($data["paragraph"]); $i++ ) {
    foreach ( $replace as $j ) {
        $data["paragraph"][$i] = str_replace($j[0],$j[1],$data["paragraph"][$i]);
    }
}

$volume   = $data["volume" ];
$segment  = $data["segment"];
$segmentf = $data["title"  ];
$imge    = get_ekstensi_file("img","../aset/v$volume/$segment");