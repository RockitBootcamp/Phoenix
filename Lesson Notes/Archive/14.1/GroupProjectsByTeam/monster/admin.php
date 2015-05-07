<?php
//Initial commit GA

// Include Database Class
include('db.php');



//Connect to DB
//same as saying in T, use avnet_games for testing a db
$connection = new DB("localhost", "root", "","txtadvnew");



// Loop over results and make a $row variable for each result
function dumpWeapons($connection) {
	//dumps entire table, weapons
	$results = $connection->execute("SELECT * FROM weapons");

	echo "Dumping weapons table: <br>";
	while ($row = $results->fetch_assoc()) {
		echo "weapon_id => " . $row['weapon_id'] . ", ";
		echo "weapon_name => " . $row['weapon_name'] . ", ";
		echo "weapon_image => " . $row['weapon_image'] . '<br>';
	}
}

dumpWeapons($connection);

echo "<br>Create a new record: <br>";
$sql_values = [
	'weapon_name' => 'sword',
	'weapon_image' => 'images/sword1.jpg'
];

$connection->create("weapons", $sql_values);

dumpWeapons($connection);

echo "<br>Retrieve a record: <br>";
$sql_values = [
	'weapon_name' => 'sword',
];

$results = $connection->retrieve("weapons", $sql_values);

while ($row = $results->fetch_assoc()) {
	echo "weapon_id => " . $row['weapon_id'] . ", ";
	$sword_id = $row['weapon_id'];
	echo "weapon_name => " . $row['weapon_name'] . ", ";
	echo "weapon_image => " . $row['weapon_image'] . '<br>';
}

echo "<br>Update a record: <br>";
$sql_values = [
	'weapon_id' => $sword_id,
	'weapon_name' => 'slime',
	'weapon_image' => 'images/slime1.jpg'
];

$connection->update("weapons", $sql_values);

dumpWeapons($connection);

echo "<br>Delete a record: <br>";
$sql_values = [
	'weapon_name' => 'slime',
];

$connection->delete("weapons", $sql_values);
dumpWeapons($connection);



?>