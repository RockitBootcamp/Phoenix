<?php

// Fetch all the records

 

    // Check for postback
      

     try {

        $link = new PDO('mysql:host=localhost;dbname=brig;charset=utf8', 'root', 'apollo');
        $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $id = $_GET["id"];

        $statement = $link->prepare('DELETE from dolphin where id = ' . $id );
        $statement->execute();
        
    } catch (PDOException $e) {
        die($e->getMessage());
    }




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Deleted Dolphine</title>
</head>
<body>
    <h1>DELETED</h1>
</body>
</html>