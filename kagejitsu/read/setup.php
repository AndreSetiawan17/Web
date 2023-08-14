<?php
if (
    !isset($_GET["volume"]) &&
    !is_numeric($_GET["volume"]) &&
    !isset($_GET["segment"])
) { header("Location: ../"); }

require __DIR__ . "/../../koneksi.php";
require __DIR__ . "/../func.php";
require __DIR__ . "/../cons.php";

$table   = $_ENV['NOVEL'];
$volume  = mysqli_real_escape_string($conn, $_GET["volume"]);
$segment = mysqli_real_escape_string($conn, $_GET["segment"]);
$data    = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM $table WHERE volume=$volume AND segment='$segment'"));


// Mengantisipasi jika data yang dibutuhkan tidak ada pada database
if ($data["volume"   ] === null ||
    $data["segment"  ] === null ||
    $data["segment"  ] === null ||
    $data["title"    ] === null ||
    $data["paragraph"] === null 
) { header("Location: ../"); }

$data["paragraph"] = json_decode($data["paragraph"]);

$volume   = $data["volume" ];
$segment  = $data["segment"];
$segmentf = $data["title"  ];
$imge    = get_ekstensi_file("img","../aset/v$volume/$segment");