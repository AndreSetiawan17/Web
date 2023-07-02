<?php
require "../../koneksi.php";
require "../../func.php";

$data = extrax("SELECT * FROM alpha");

$days = ["None","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu","Minggu"];
?>        
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
        <form action="index.php" method="post">
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
        <form action="index.php" method="post">
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
    <div class="data">
        <?php if ( !empty($data) ) {?>
            <?php foreach ( $data as $dt ) :?>
                <form action="index.php" method="post">
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
    </div>
</table>