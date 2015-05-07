<?php

    // error_reporting(E_ALL);
    // ini_set('display_errors', 'on');
    include 'initialize.php';

    $db = new DB();
    session_start();
    $sql = "SELECT * FROM People";
    $results = $db->execute($sql);
            print_r($_SESSION);
    if (count($_SESSION['user_id'])== 0){
        header("Location: index.php");
        die("You must be logged in to create reviews.");
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sql_values = $_POST;
        // print_r($sql_values);
        $table = "People"; 
        $db->insert($table, $sql_values);
    }
?>