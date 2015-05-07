<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    include 'initialize.php';
    include 'newaverages.php';
    $db = new DB;


    $sql = "SELECT company_id FROM Companies";
    $results = $db->execute($sql);

    // while ($row = $results->fetch_assoc()) {
    //         $result = getAverages($row['company_id']);
    //         print_r($result);
    // }

    print_r(getAverages(1));

 ?>