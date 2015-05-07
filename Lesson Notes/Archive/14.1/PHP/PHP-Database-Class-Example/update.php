<?php

// Include Database Class
include('db.php');
include('db_credentials.php');

// Insert Values
$sql_values = [
	'first_name' => 'Brig'
];

// Walk over and add quotes to values
$sql_values = db::array_in_quotes($sql_values);

// Execute SQL Statement
db::update('user', $sql_values, "WHERE user_id = 59");
