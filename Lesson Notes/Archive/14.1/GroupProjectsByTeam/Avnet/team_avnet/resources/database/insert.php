<?php
    
// namespace RockIT\TechGames;

// include_once('db.php');

// Start Database Object
$db = new DB();

// Insert Values
$sql_values = [
	'first_name' => $first_name,
	'last_name' => $last_name,
	'email' => $email,
	'password' => $password
];

// Execute SQL Statement
$db->insert('user', $sql_values);


$game_values = [
	'title' => $title,
	'description' => $description,
	'start_time' => $start_time,
	'end_time' => $end_time,
	'equipment' => $equipment,
	'skill_requirements' => $skills,
	'scoring' => $scoring	
];

$db->insert('game', $game_values);