<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./podcast.css?<?php echo time() ?>">
    <?php include("tableau.php"); ?>
    <title>Document</title>
</head>
<body>
    <h1>POSTCAST</h1>
    <?php
    foreach ($podcast as $cle => $valeur) {
        echo ('
        <div class="podcast">
        <p>'.$valeur["date"].'</p>
        <h2>'.$valeur["name"].'</h2>
        <p>'.$valeur["content"].'</p>
        <audio controls src="'.$valeur["audio"].'"></audio>
        <a href="./podcast.php?Index='.$cle.'">
        <div class="playPanel">
            <div class="playButton"></div>Ecouter
        </div>
        </a>
    </div>
    ');
    };
    ?>
</body>
</html>