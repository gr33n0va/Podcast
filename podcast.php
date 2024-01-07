<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./podcast.css?<?php echo time() ?>">
    <?php include("tableau.php"); ?>
</head>
<body>
    <?php
    $index = $_GET['Index']; 
    if($index > count($podcast)){
        echo("404 not found beatch!");
    }else{
        echo('<h1>'.$podcast[$index]["name"].'</h1>');
        echo($podcast[$index]["date"]);
        echo('<p>'.$podcast[$index]["content"].'</p>');
        echo('<audio controls src="'.$podcast[$index]["audio"].'"></audio>');
        };
        ?>
    
</body>
</html>