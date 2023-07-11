<?php require "setup.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="header-container">
        <h2><?=$title?></h2>
    </div>

    <div class="content-container">
        <div class="content">
            <div class="c-top">
                <div class="cover-container "><img class="cover" src="aset/cover1.jpg" alt="Image not found"></div>
                <div class="c-sinopsis cf">
                    <p class="sinopsis"><?=$sinopsis?></p>
                </div>
            </div>
            <div class="c-body">
                <?php for ( $i = 0; $i < count($link); $i++ ) : ?>
                    <div class="volume <?php if ( $i+1 === count($link) ) {echo "last-volume";} ?>">
                        <div class="vol-img"><img src="aset/cover<?=$i+1?>.jpg" alt="Image not found" title="Volume <?=$i+1?>"></div>
                        <div class="link lk<?=$i+1?>">
                            <ul>
                                <?php foreach ( $link[$i] as $key => $val ) : ?>
                                    <li><a href="read/?volume=<?=$i+1?>&segment=<?=$key?>"><?=$val?></a></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                <?php endfor?>
            </div>
        </div>
    </div>    
</body>
</html>