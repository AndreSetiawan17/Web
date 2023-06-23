<?php 
require __DIR__ . "/../koneksi.php";
require __DIR__ . "/../function.php";

$data = extrax("SELECT * FROM jare");





?>



<?php
// Menentukan musim sesuai dengan bulan
$musim = match (intval(date("n"))) {
    3 , 4 , 5  => "Spring" ,
    6 , 7 , 8  => "Summer" ,
    9 , 10, 11 => "Fall"   ,
    12, 1 , 2  => "Winter" ,
    default    => "Error"  ,
};?>
<?php
// Table strukture
$days = ["Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu","Minggu"];
$count = [];
foreach ( $data as $d ) {
    $count[] = $days[$d["day"]]; } 
$count = array_count_values($count);

$senin  = [];
$selasa = [];
$rabu   = [];
$kamis  = [];
$jumat  = [];
$sabtu  = [];
$minggu = [];

foreach ( $data as $d ) {
    if     ( $d["day"] == 0 ) { $senin [] = $d; }
    elseif ( $d["day"] == 1 ) { $selasa[] = $d; }
    elseif ( $d["day"] == 2 ) { $rabu  [] = $d; }
    elseif ( $d["day"] == 3 ) { $kamis [] = $d; }
    elseif ( $d["day"] == 4 ) { $jumat [] = $d; }
    elseif ( $d["day"] == 5 ) { $sabtu [] = $d; }
    elseif ( $d["day"] == 6 ) { $minggu[] = $d; } 
} $haries = [$senin, $selasa, $rabu, $kamis, $jumat, $sabtu, $minggu]; ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal rilis</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="header"><h1>Jadwal Rilis Anime <?= $musim . " "; echo date("Y")?></h1></div>

    <div class="content">
        <div class="nav-but">
            <h6><form action="crud/index.php" method="post"><button>Modive</button></form></h6>
        </div>

        <div class="table">
            <table border="10px">
                <tr>
                    <th class="tava">Hari</th> <!-- tava -> Table Value -->
                    <th class="tava">Judul</th>
                    <th class="tava">Jam</th>
                    <th class="tava">Source</th>
                </tr>

                <?php foreach ( $haries as $dey) :?>
                    <?php if ( count($dey) < 1 ) { continue;} ?>
                    <tr><td rowspan="<?= count($dey) + 1?>"><?= $days[$dey[0]["day"]]; ?></td></tr>

                    <?php if ( count($dey) > 0 ) {foreach ( $dey as $i ) { ?>
                        <tr>
                            <td class="title"><?= $i["title"]?></td>
                            <td class="tava"><?php if ( isset($i["time"]) ) { echo $i["time"]; } else { echo "-"; } ?></td>
                            <td class="tava"><?php if ( isset($i["source"]) ) { echo $i["source"]; } else { echo "-"; } ?></td>
                        </tr>
                    <?php }}?>
                <?php endforeach ?>
            </table>
        </div>






    </div>
</body>
</html>