<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    $mysqli = new mysqli("localhost", "root", "", "avnet_games");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    //$res = $mysqli->query("SELECT * FROM user");


    $first_name = 'miss';
    $last_name = 'piggy';


    if(!$mysqli->query("insert into user (first_name, last_name) values ('$first_name', '$last_name')")) {
        echo "Table creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
    }

    echo "<br><br>";

    // while ($row = $res->fetch_assoc()) {
    //     echo " first_name = " . $row['first_name'] . "<br>";
    // }

    // print_r($res);

?>