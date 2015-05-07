<html><body>
<?php
//ini_set('error_reporting', E_ALL);
var_dump($_GET);
echo("<br>");
?>
<br>
<?php
$username = $_GET['new_username'];
$pass = $_GET['password'];
$passv = $_GET['password_verify'];

if(strlen($username) < 5) {
	echo "username is too short<br>";
} else {
	echo "username: " . $username . " is long enough<br>";
}

if($pass != $passv) {
	echo "your passwords do not match";
} else {
	echo "that is an awesomely secure password";
}

?>


</body></html>

