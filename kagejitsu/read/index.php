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

    <header class="m-header">
        <h1><?=$title?> - Volume <?=$volume?></h1>
    </header>

    <main>
        <header><h2><?=$segmentf?></h2></header>
        <ul>
            <?php $index_img = 0; ?>
            <?php $first_p = true; ?>
            <?php foreach ( $data["paragraph"] as $p ) : ?>
                <li>
                    <?php if ( $p === "#!img" ) : ?>
                        <?php
                            $index_imgn = $index_img+1;
                            $path = ["..","aset","v$volume",$segment,"img$index_imgn.$imge[$index_img]"]
                        ?>
                        <img src="<?=implode(DIRECTORY_SEPARATOR,$path)?>" alt="Image not fount">
                        <?php $index_img += 1 ?>
                    <?php else : ?>
                        <p <?php if($first_p){echo 'class="first-p"'; $first_p = false;}?>><?=$p?></p>
                    <?php endif ?>
                </li>
            <?php endforeach ?>
        </ul>
    </main>

    <footer><div class="f-container"><h3>Hubungi saya di: andresetiawan.f@gmail.com</h3></div></footer>
</body>
</html>