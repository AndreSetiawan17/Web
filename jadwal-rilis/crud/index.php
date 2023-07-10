<?php
require "setup.php";

if ( isset($_POST["cud"]) && $_POST["cud"] === "true" ) { crud($_POST); }


// echo "POST -->";var_dump($_POST);echo "<br>";echo "GET -->";var_dump($_GET);echo "<br>" ;;echo "FILES-->"; var_dump($_FILES);
// if ( isset($_POST["about"]) ) { echo "Teleport to About <br>" ; }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create, Read, Update, Delete</title>
    <link rel="stylesheet" href="style.css">
    <?php $table = get_data($_POST) ?>
</head>
<body>
    <div class="header"><h1>Jadwal Rilis Anime</h1></div>

    <div class="container">
        <table border="10px">

        <div class="navigation">
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
                <input type="text" name="cud" value="true" class="hide">
                <tr>
                    <td colspan="5"><input class="search-bar" type="text" name="search-bar" required></td>
                    <td><button class="but-search" type="submit" name="search">search</button></td>
                </tr>
            </form>
        </div>

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
                <input type="text" name="cud" value="true" class="hide">

                <tr>
                    <td><label for="id">Auto</label></td>
                    <td><input  class="title"  type="text" name="title"  autocomplete="off" required></td>
                    <td>
                        <select name="day" id="day">
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
                <input type="text" name="cud" value="true" class="hide">
                <tr>
                    <td><input  class="id"     type="text" name="id"     autocomplete="off" required></td>
                    <td><input  class="title"  type="text" name="title"  autocomplete="off" ></td>
                    <td>
                        <select name="day" id="day">
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
        <?php if ( !empty($table) ) {?>
            <?php foreach ( $table as $dt ) :?>
                <form action="" method="post">
                    <tr>
                        <td><?= $dt["id"] ?></td>
                        <td class="title"><?=$dt["title"] ?></td>

                        <?php if ( !isset($dt["day"]) && !isset($dt["time"]) && !isset($dt["source"]) ) : ?>
                            <td colspan="3">-</td>

                        <?php elseif ( strlen($dt["time"]) > 5 && strlen($dt["time"]) <= 12 && in_array(ucfirst(strtolower(explode("-",$dt["time"])[1])), $month) ) : ?>
                            <td colspan="2"><?= $dt["time"] ?></td>
                            <td><?= (isset($dt["source"])) ? $dt["source"] : "-" ?></td>
                        
                        <?php elseif ( !isset($dt["day"]) && !isset($dt["time"]) ) : ?>
                            <td colspan="2">-</td>
                            <td><?= (isset($dt[$i])) ? $dt[$i] : "-" ?></td>

                        <?php else : ?>
                            <?php foreach ( ["day", "time", "source"] as $i ) : ?>
                                <td><?= (isset($dt[$i])) ? $dt[$i] : "-" ?></td>
                            <?php endforeach ?>
                        <?php endif ?>

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