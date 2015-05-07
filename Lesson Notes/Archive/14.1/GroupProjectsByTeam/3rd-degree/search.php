<?php

// Include Database Class
include('db.php');

// Start Database Object
$db = new DB();

//If statement to include "All" as a search category using variable "$cat". "%" is wild card.

if($_POST['category']=="All") {
    $cat="%";
} else {
        $cat = $_POST['category'];
    }

// Write SQL Statement
$sql = "SELECT * FROM 
            restaurants as r, tweets as t, rating as ra 
            WHERE r.twitter_name=t.twitter_name
            AND r.id=ra.restaurant_id
            AND r.zip_code=\"{$_POST['zip_code']}\" 
            AND r.category LIKE \"$cat\"";

// Execute SQL Statement
$results = $db->execute($sql);

// search through the database and pull the matching results

$response = [
    "results"=> []
];


while ($row = $results->fetch_assoc()) {
    $response['results'][] = $row;
}


echo json_encode($response);



?>