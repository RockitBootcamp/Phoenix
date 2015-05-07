<?php

function make_insert_statement($table_name, $sql_values) {
	return "INSERT INTO `{$table_name}` (`" . implode('`, `', array_keys($sql_values)) . "`) VALUES (" . implode(', ', $sql_values) . ")";
}

$table = 'user';

$values = [
	'user_id' => '1',
	'first_name' => 'Brad',
	'last_name' => 'Westfall',
	'email' => 'a@b.com',
	'pass' => 'asdfasdfsadfsadfsadfsergterhge'
];

$sql_statement = make_insert_statement($table, $values);

echo $sql_statement;