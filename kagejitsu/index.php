<?php require "setup.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header><h2><?=$title?></h2></header>

    <div class="content-container">
        <main>
            <div class="c-top">
                <div class="cover-container "><img class="cover" src="aset/cover1.jpeg" alt="Image not found"></div>
                <div class="c-sinopsis cf">
                    <p class="sinopsis"><?=$sinopsis?></p>
                </div>
            </div>
            <div class="c-body">
                <?php for ( $i = 0; $i < count($seti); $i++ ) : ?>
                    <div id="volume<?=$i+1?>" class="volume <?php if ( $i+1 === count($seti) ) {echo "last-volume";} ?>">
                        <div class="vol-img vol-img<?=$i+1?>"><img src="aset/cover<?=$i+1?>.<?=$format_cover[$i]?>" alt="Image not Found" title="Volume <?=$i+1?>"></div>
                        <div class="link lk<?=$i+1?>">
                            <ul>
                                <?php foreach ( $seti[$i] as $key => $val ) : ?>
                                    <li><a href="read/?volume=<?=$i+1?>&segment=<?=$key?>"><?=$val?></a></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                <?php endfor?>
            </div>
        </main>
    </div>

    <footer id="f">
        <div class="f-main">
            <div class="thanks"><h2><strong>Thanks For</strong></h2></div>
            <div class="wpu">
                <img src="aset/SandhikaGalih.jpg" onerror="this.src='https://yt3.googleusercontent.com/ytc/AOPolaR8ZNzJOaDjrBEw0Sb1NGe87q9V0FsNuXxJRydW7Q=s176-c-k-c0x00ffffff-no-rj';" alt="Imgae no Found">
                <div class="name"><h3>Sandhika Galih</h3></div>
            </div>
        </div>
    </footer>

</body>
</html>