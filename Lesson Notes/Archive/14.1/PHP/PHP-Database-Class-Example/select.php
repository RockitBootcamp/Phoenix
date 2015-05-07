<?php

// Include Database Class
include('db.php');
include('db_credentials.php');

// Write SQL Statement
$sql = "
 	SELECT * FROM user
	";

// Execute SQL Statement
$results = db::execute($sql);

// Loop over results and make a $row variable for each result
while ($row = $results->fetch_assoc()) {
	echo $row['first_name'] . '<br>';
}