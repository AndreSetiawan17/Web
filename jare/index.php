<?php 
require "../koneksi.php";
require "../function.php";

$data = query("SELECT * FROM jare");



$days = ["Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu","Minggu"];
$count = [];
foreach ( $data as $d ) {
    $count[] = $days[$d["day"]];
} $count = array_count_values($count);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    table {
        margin: auto;
    }



    </style>
</head>
<body>

<?php
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
}
$haries = [$senin, $selasa, $rabu, $kamis, $jumat, $sabtu, $minggu];
$arr = [];
?>




<?php 



?>


    <table border="10px">
        <tr>
            <th>Hari</th>
            <th>Judul</th>
            <th>Jam</th>
        </tr>



        <?php foreach ( $haries as $dey) :?>
            <?php if ( count($dey) < 1 ) { continue;} ?>
            <tr><td rowspan="<?= count($dey) + 1?>"><?= $days[$dey[0]["day"]]; ?></td></tr>

            <?php if ( count($dey) > 0 ) {foreach ( $dey as $i ) { ?>
                <tr>
                    <td><?= $i["title"] ?></td>
                    <td><?= $i["time"] ?></td>
                </tr>
            <?php }}?>
        <?php endforeach ?>

    </table>    
</body>
</html>