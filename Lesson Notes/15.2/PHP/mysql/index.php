<?php

    

    try {
    
        $link = new PDO('mysql:host=localhost;dbname=brig;charset=utf8', 'root', 'apollo');
        $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $statement = $link->prepare('SELECT * FROM dolphin;');
        $statement->execute();
        $results = $statement->fetchAll();

       // print_r($results);

    } catch (PDOException $e) {
        die($e->getMessage());
    }




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dolphin</title>
</head>
<body>
    <h1>I Love Dolphins</h1>

    <p>Here are some of my favorite dolphins</p>

    <ul>
    
        <?php
        foreach($results as $dolphin){

            echo "<li>" .  $dolphin["name"] . " who is a " .  $dolphin["type"] . "<a href='delete.php?id=" . $dolphin["id"] . "'>Delete</a>  <a href='update.php?id=" . $dolphin["id"] . "'>Update</a></li>" ;
        }
        ?>


    </ul>

    <p><a href="add.php">Add</a> a new dolphin<p>
    
</body>
</html>