<?php





?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP:Dasar</title>
</head>
<body>

    <h3>For loop</h3>
    <table border="1">
        <?php for ( $i = 0; $i < 10; $i++ ) : ?>
            <tr>
                <?php for ( $j = 0; $j <10; $j++) :?>
                    <td><?= "$i , $j" ?></td>
                <?php endfor?>
            </tr>
        <?php endfor?>
    </table>

    <h3>While loop</h3>
    <table border="1">
        <?php
            $i = 0; 
            while ( $i < 10) :?>
            <tr>
                <td><?= $i; $i++;?></td>
            </tr>
        <?php endwhile?>
    </table>






</body>
</html>