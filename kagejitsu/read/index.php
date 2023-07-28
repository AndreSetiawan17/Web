<?php require "setup.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volume <?=$volume?> - <?=ucfirst($segment)?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="m-header"><?=$title?> - Volume <?=$volume?></header>

    <main>
        <header><?=$segmentf?></header>
        <ul>
            <?php $index_img = 0; ?>
            <?php foreach ( $data["paragraph"] as $p ) : ?>
                <li>
                    <?php if ( $p === "#!img" ) : ?>
                        <img class="illustration" src="../aset/v<?=$volume?>/<?=$segment?>/img<?=$index_img+1?>.<?=$imge[$index_img]?>" alt="Image not fount">
                        <?php $index_img += 1 ?>
                        <!-- <img src="../aset/v1/prolog/img1.jpg" alt=""> -->
                    <?php else : ?>
                        <p><?=$p?></p>
                    <?php endif ?>
                </li>
            <?php endforeach ?>
        </ul>
    </main>
    <footer></footer>
</body>
</html>