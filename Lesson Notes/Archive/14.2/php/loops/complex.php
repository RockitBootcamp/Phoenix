<?php

$person0 = ['name' => 'Brad', 'age' => 31];
$person1 = ['name' => 'Jess', 'age' => 30];
$person2 = ['name' => 'Bob', 'age' => 37];



// $person in the loop will be an array
$people = [$person0, $person1, $person2];

foreach($people as $person) {
	echo $person['name'] . '<br>';
}


// $person in the loop is an atomic value
$people = [12, 23, 45];

foreach($people as $person) {
	echo $person . '<br>';
}