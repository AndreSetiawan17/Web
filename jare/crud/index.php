<?php 
require __DIR__ . "/../../function.php";
require __DIR__ . "/../../koneksi.php";

$table_dbname = "jare";


if ( isset($_POST["add"]) ) {

    if ( isset($_POST["title"]) ) {
        $title = $_POST["title"];
        mysqli_query($conn, "INSERT INTO $table_dbname (title) VALUES ('$title')");
    } else { var_dump($_POST); }

}




print_r($_POST);

$days = ["Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu","Minggu"];
$table = extrax("SELECT * FROM $table_dbname");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create, Update, Delete</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header"><h1>CRUD</h1></div>

    <div class="container">
        <table border="10px">
            <tr>
                <th class="tava">ID</th> <!-- tava -> Table Value -->
                <th class="tava">Judul</th>
                <th class="tava">Hari</th>
                <th class="tava">Jam</th>
                <th class="tava">Source</th>
                <th class="tava">Action</th>
            </tr>


            <div class="add">
                <form action="" method="post">
                    <tr>
                        <td>Auto</td>
                        <td><input  class="title"  type="text" name="title" required></td>
                        <td><input  class="day"    type="text" name="day"   ></td>
                        <td><input  class="time"   type="text" name="time"  ></td>
                        <td><input  class="source" type="text" name="source"></td>
                        <td><button class="but-add" type="submit" name="add">add</button></td>
                    </tr>
                </form>
            </div>

            <div class="change">
                <form action="" method="post">
                    <tr>
                        <td><input  class="id"     type="text" name="id"    required></td>
                        <td><input  class="title"  type="text" name="title" ></td>
                        <td><input  class="day"    type="text" name="day"   ></td>
                        <td><input  class="time"   type="text" name="time"  ></td>
                        <td><input  class="source" type="text" name="source"></td>
                        <td><button class="but-change" type="submit" name="change">change</button></td>
                    </tr>
                </form>
            </div>

            

            <!-- Menampilkan Data -->
            <?php foreach ( $table as $dt ) :?>
                <tr>
                    <td><?=              $dt["id"    ] ?></td>
                    <td class="title"><?=$dt["title" ] ?></td>
                    <td><?php if ( isset($dt["day"   ]) ) { echo $days[$dt["day"]]; } else { echo "-"; } ?></td>
                    <td><?php if ( isset($dt["time"  ]) ) { echo $dt  ["time"    ]; } else { echo "-"; } ?></td>
                    <td><?php if ( isset($dt["source"]) ) { echo $dt  ["source"  ]; } else { echo "-"; } ?></td>
                    <form action="" method="post"><td><button class="but-del" type="submit" name="delete">delete</button></td></form>
                </tr>            
            <?php endforeach ?>
        </table>
    </div>
    
</body>
</html>