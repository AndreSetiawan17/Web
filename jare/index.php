<?php
require __DIR__ . "/../function.php";
require __DIR__ . "/../koneksi.php";
require "crud.php";
require "conf.php";

$days = ["None","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu","Minggu"];
crud($_POST);



echo "POST -->";var_dump($_POST);echo "<br><br>";echo "GET -->";var_dump($_GET);
?>
<!-- 
    Agar memastikan data yang ditampilkan adalah data yang terbaru,
    penambilan data dari database harus berada dibagian yang paling bawah
-->
<?php $table = extrax("SELECT * FROM $table_dbname"); ?>
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
                        <td><label for="id">Auto</label></td>
                        <td><input  class="title"  type="text" name="title" required></td>
                        <td>
                            <select name="day" id="day">
                                <?php foreach ( $days as $d ) : ?>
                                    <option value="<?=$d?>"><?=$d?></option>
                                <?php endforeach ?>
                            </select>
                        </td>
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
                        <td>
                            <select name="day" id="day">
                                <?php foreach ( $days as $d ) : ?>
                                    <option value="<?=$d?>"><?=$d?></option>
                                <?php endforeach ?>
                            </select>
                        </td>
                        <td><input  class="time"   type="text" name="time"  ></td>
                        <td><input  class="source" type="text" name="source"></td>
                        <td><button class="but-change" type="submit" name="change">change</button></td>
                    </tr>
                </form>
            </div>


            <!-- Menampilkan Data -->
            <?php if ( !empty($table) ) {?>
                <?php foreach ( $table as $dt ) :?>
                    <form action="" method="post">
                        <tr>
                            <td><?=              $dt["id"    ] ?></td>
                            <td class="title"><?=$dt["title" ] ?></td>
                            <td><?php if ( isset($dt["day"   ]) ) { echo $dt["day"   ]; } else { echo "-"; } ?></td>
                            <td><?php if ( isset($dt["time"  ]) ) { echo $dt["time"  ]; } else { echo "-"; } ?></td>
                            <td><?php if ( isset($dt["source"]) ) { echo $dt["source"]; } else { echo "-"; } ?></td>
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="id" value="<?= $dt["id"] ?>">
                            <td><button class="but-del" type="submit" name="delete">delete</button></td>
                        </tr>
                    </form>
                <?php endforeach ?>
                <!-- Jika tidak ada item didalam database -->
                <?php } else { echo "<tr><td colspan=6><h1 class=note>Empty</h5></td></tr>"; } ?>
        </table>
    </div>
</body>
</html>