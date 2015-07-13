<?php

// Fetch all the records

 

    // Check for postback
    
       
         try {
    
            $link = new PDO('mysql:host=localhost;dbname=brig;charset=utf8', 'root', 'apollo');
            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            if( $_SERVER["REQUEST_METHOD"] == "POST" ) {
                $id = $_POST["id"];
                $name = $_POST["name"];
                $type = $_POST["type"];

                $sql = 'update dolphin set name="' . $name . '", type="' . $type . '" where id=' . $id;
                echo($sql);
                $statement = $link->prepare($sql);
                $statement->execute();
            }

            $id = $_GET["id"];
            $statement = $link->prepare('SELECT * FROM dolphin where id=' . $id);
            $statement->execute();
            $results = $statement->fetchAll();

            $dolphin = $results[0];
            print_r($dolphin);
            
        } catch (PDOException $e) {
            die($e->getMessage());
        }



 


   




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Dolphin</title>
</head>
<body>
    <h1>Update the Dolphin</h1>
    
    <form method="post" action="update.php">
        ID: <input type="text" name="id" value="<?php echo $dolphin['id']; ?>"><br>
        name: <input type="text" name="name" value="<?php echo $dolphin['name']; ?>"><br>
        type: <input type="text" name="type" value="<?php echo $dolphin['type']; ?>"><br>
        <input type="submit" value="Submit">
    </form>

    
</body>
</html>