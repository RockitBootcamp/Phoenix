<?php

// Fetch all the records

 

    // Check for postback
    if( $_SERVER["REQUEST_METHOD"] == "POST" ) {
        echo "It's a post";

         try {
    
            $link = new PDO('mysql:host=localhost;dbname=brig;charset=utf8', 'root', 'apollo');
            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            $id = $_POST["id"];
            $name = $_POST["name"];
            $type = $_POST["type"];

            $statement = $link->prepare('insert into dolphin (id, type, name)  values (' . $id . ', "' . $type . '", "' . $name . '"); ');
            $statement->execute();
            
        } catch (PDOException $e) {
            die($e->getMessage());
        }



    }


   




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add new Dolphin</title>
</head>
<body>
    <h1>Add a New Dolphin</h1>
    
    <form method="post" action="add.php">
        ID: <input type="text" name="id"><br>
        name: <input type="text" name="name"><br>
        type: <input type="text" name="type"><br>
        <input type="submit" value="Submit">
    </form>

    
</body>
</html>