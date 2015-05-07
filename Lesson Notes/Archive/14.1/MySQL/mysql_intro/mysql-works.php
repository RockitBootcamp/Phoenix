<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    $mysqli = new mysqli("localhost", "root", "", "avnet_games");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    echo $mysqli->host_info . "\n";

?> 
