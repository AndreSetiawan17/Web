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
    <!-- <header><h1>Prolog</h1></header> -->

    <!-- Menggunakan list sebagai parents dari paragraph -->
    <main>
        <div class="segment">
            <div class="teks">
                <h1><?=ucfirst($segmentf)?></h1>
            </div>
        </div>
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
        <!-- <img class="illustration ill1" src="../aset/v1/prolog/img1.jpg" alt="Image 1" loading="lazy">
        <img class="illustration ill2" src="../aset/v1/prolog/img2.jpg" alt="Image 2" loading="lazy">
        <img class="illustration ill3" src="../aset/v1/prolog/img3.jpg" alt="Image 3" loading="lazy">
        <img class="illustration ill4" src="../aset/v1/prolog/img4.jpg" alt="Image 4" loading="lazy">
        <img class="illustration ill5" src="../aset/v1/prolog/img5.jpg" alt="Image 5" loading="lazy">
        <img class="illustration ill6" src="../aset/v1/prolog/img6.jpg" alt="Image 6" loading="lazy">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa repellendus quia saepe fugiat, magnam molestiae similique a ipsum ab voluptas? Ipsum inventore harum architecto dolore explicabo nam quis numquam velit!</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa repellendus quia saepe fugiat, magnam molestiae similique a ipsum ab voluptas? Ipsum inventore harum architecto dolore explicabo nam quis numquam velit!</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa repellendus quia saepe fugiat, magnam molestiae similique a ipsum ab voluptas? Ipsum inventore harum architecto dolore explicabo nam quis numquam velit!</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa repellendus quia saepe fugiat, magnam molestiae similique a ipsum ab voluptas? Ipsum inventore harum architecto dolore explicabo nam quis numquam velit!</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa repellendus quia saepe fugiat, magnam molestiae similique a ipsum ab voluptas? Ipsum inventore harum architecto dolore explicabo nam quis numquam velit!</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa repellendus quia saepe fugiat, magnam molestiae similique a ipsum ab voluptas? Ipsum inventore harum architecto dolore explicabo nam quis numquam velit!</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa repellendus quia saepe fugiat, magnam molestiae similique a ipsum ab voluptas? Ipsum inventore harum architecto dolore explicabo nam quis numquam velit!</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa repellendus quia saepe fugiat, magnam molestiae similique a ipsum ab voluptas? Ipsum inventore harum architecto dolore explicabo nam quis numquam velit!</p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa repellendus quia saepe fugiat, magnam molestiae similique a ipsum ab voluptas? Ipsum inventore harum architecto dolore explicabo nam quis numquam velit!</p> -->
    </main>

    <footer></footer>
</body>
</html>