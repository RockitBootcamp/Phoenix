<?php

include('initialize.php');

if (!is_numeric($_SESSION['user_id'])) {
	die('You need to log in');
} 

echo 'You\'re logged in ' . $_SESSION['name'];

?>