<?php require "setup.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volume <?=$_GET["volume"] . ", " . $data["title"]?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php print_r($data["paragraph"]) ?>


</body>
</html>