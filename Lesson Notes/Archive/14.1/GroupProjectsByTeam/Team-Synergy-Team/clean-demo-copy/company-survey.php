<!-- add validation to this page you lazy bastards -->
<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    include_once('db.php');
    $db = new DB();

    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sql_values = $_POST;
        print_r($sql_values);
        $table = "Companies"; 
        $db->insert($table, $sql_values);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Companies</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>

    <form action="companies.php" method="POST">
        <fieldset> 
        <input type="text" placeholder="name" name="Name">Company<p></p>
        <input type="text" placeholder="industry" name="Industry">Industry<p></p>
        <input type="text" placeholder="website" name="Website">Website<p></p>
        <button type="submit">Submit</button>
        <button class="cancel">Cancel</button>


        </fieldset>
    </form>
</body>
</html>







