<?php

session_start();
session_destroy();

header('Refresh: 5; url=/sessions.php');
//exit();


echo "you are logged out, please come back<br>";
print_r($_SESSION);

?>