<?php
session_start();

require "../../koneksi.php";
require "../../func.php";
require "crud.php";

verify("../../");

// $table_dbname = $_ENV["JADWAL"];
crud($_POST);

if ( isset($_POST["about"]) ) { echo "Teleport to About <br>" ; }


echo "POST -->";var_dump($_POST);echo "<br>";echo "GET -->";var_dump($_GET);echo "<br>" ;;echo "FILES-->"; var_dump($_FILES);
?>
<?php
// Eksport & Import
if (isset($_POST["eksport"])) {
    // Nama file yang akan diunduh
    $filename = "data.json";

    // Mengatur header respons
    header("Content-Type: application/json");
    header("Content-Disposition: attachment; filename=\"$filename\"");

    // Menghasilkan data JSON
    $json = json_encode($data);

    // Menulis data JSON ke output
    echo $json;
    exit;
} elseif ( isset($_POST["import"]) ){
    $name      = $_FILES["json_file"]["name"];
    $type      = $_FILES["json_file"]["type"];
    $location  = $_FILES["json_file"]["temp_name"];


    if (move_uploaded_file($sourcePath, "data/file.json")) {
        $data = json_decode(file_get_contents($targetPath), true);
        echo $data;
    } else {
        // Penanganan kesalahan jika gagal memindahkan file
        // ...
        echo "Failed";
    }

    // $data = json_decode(file_get_contents($location),true);

    // Mendapatkan informasi field dari tabel
    // $result = mysqli_query($conn, "SELECT * FROM $table_dbname");
    // $fields = mysqli_fetch_fields($result);

    // if ( !in_array() ) )

    // var_dump($data);
    // echo "<br><br><br><br>";

}
?>
<?php
// Pengambilan data harus berada dibawah, agar ketika terjadi perubahan pada database, table tetap mendapatkan data terbaru
$days = ["None","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu","Minggu"];
$data = ajax();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create, Read, Update, Delete</title>
    <link rel="stylesheet" href="style.css">
    <!-- <script src="script.js"></script> -->
</head>
<body>
    <div class="header"><h1>CRUD</h1></div>

    <div class="container">
        <div class="navigation">
            <table border="10px">
                <form action="" method="post" enctype="multipart/form-data">
                    <tr>
                        <td colspan="2"><button class="but-none" type="submit" name="none">none</button></td>
                        <td>
                            <!--
                                Tampilan tombol untuk memilih file kurang bagus
                                jadi dihilangkan dan digantikan dengan button biasa.
                                tetapi jika tombol ditekan maka halaman akan reload/semacamnya,
                                untuk mengatasinya pada attribut 'type' di isi dengan 'button.
                                Dan untuk menghubungkan button dengan input[file] maka digunakan lah javascript
                            -->
                            <input type="file" id="fileInput" style="display: none;" name="json_file">
                            <button class="but-import" type="button" id="but-import-chose">choose</button>
                            <script>
                                const browseButton = document.getElementById('but-import-chose');
                                const fileInput = document.getElementById('fileInput');

                                browseButton.addEventListener('click', () => {
                                    fileInput.click();
                                });

                                fileInput.addEventListener('change', () => {
                                    // Lakukan tindakan apa pun yang diinginkan setelah memilih file
                                    console.log(fileInput.files);
                                });
                            </script>
                        </td>
                        <td><button class="but-import" type="submit" name="import">import</button></td>
                        <td><button class="but-export" type="submit" name="eksport">eksport</button></td>
                        <!-- <td><button class="but-info" type="submit" name="about">about</button></td> -->
                        <td><button class="but-reload" type="submit" name="refresh">refresh</button></td>
                    </tr>
                </form>
        </div>

            <div class="search">
                <form action="" method="post">
                    <tr>
                        <td colspan="5"><input id="keyword" class="search-bar" type="text" name="search-bar" placeholder="Search" autocomplete="off"></td>
                        <!-- <td><button class="but-search" type="submit" name="search">search</button></td> -->
                        <td>
                            <select name="search-by" id="search-by">
                                <option value="all">All</option>
                                <option value="id">ID</option>
                                <option value="title">Judul</option>
                                <option value="day">Hari</option>
                                <option value="hour">Jam</option>
                                <option value="date">Tanggal</option>
                                <option value="source">Source</option>
                            </select>
                        </td>
                    </tr>
                </form>
            </div>
        </table>

        <table border="10px" id="data">
            <div class="table-header">
                <tr>
                    <th class="tava">ID</th> <!-- tava -> Table Value -->
                    <th class="tava">Judul</th>
                    <th class="tava">Hari</th>
                    <th class="tava">Jam</th>
                    <th class="tava">Source</th>
                    <th class="tava">Action</th>
                </tr>
            </div>


            <div class="add">
                <form action="" method="post">
                    <tr>
                        <td><label for="id">Auto</label></td>
                        <td><input  class="title"  type="text" name="title"  autocomplete="off" required></td>
                        <td>
                            <select class="day" name="day" id="day">
                                <?php foreach ( $days as $d ) : ?>
                                    <option value="<?=$d?>"><?=$d?></option>
                                <?php endforeach ?>
                            </select>
                        </td>
                        <td><input  class="time"   type="text" name="time"   autocomplete="off" ></td>
                        <td><input  class="source" type="text" name="source" autocomplete="off" ></td>
                        <td><button class="but-add" type="submit" name="add">add</button></td>
                    </tr>
                </form>
            </div>

            <div class="change">
                <form action="" method="post">
                    <tr>
                        <td><input  class="id"     type="text" name="id"     autocomplete="off" required></td>
                        <td><input  class="title"  type="text" name="title"  autocomplete="off" ></td>
                        <td>
                            <select class="day" name="day" id="day">
                                <?php foreach ( $days as $d ) : ?>
                                    <option value="<?=$d?>"><?=$d?></option>
                                <?php endforeach ?>
                            </select>
                        </td>
                        <td><input  class="time"   type="text" name="time"   autocomplete="off" ></td>
                        <td><input  class="source" type="text" name="source" autocomplete="off" ></td>
                        <td><button class="but-change" type="submit" name="change">change</button></td>
                    </tr>
                </form>
            </div>


            <!-- Menampilkan Data -->
                <?php if ( !empty($data) ) {?>
                    <?php foreach ( $data as $dt ) :?>
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
                <?php } else { echo "<tr><td colspan=6><h1 class=note>Empty</h5></td></tr>"; } ?>
            <!-- </div> -->
        </table>
    </div>

    <!-- <div id="data"></div> -->


<script src="script.js"></script>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>