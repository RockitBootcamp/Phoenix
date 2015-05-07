	<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

    $mysqli = new mysqli("localhost", "root", "", "avnet_game");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    echo $mysqli->host_info . "\n";


 // 	$result=mysqli_query($mysqli,"select *from user");

	// print_r($result);


	// $result = $mysqli->query("select *from user");

	$result = $mysqli->query("insert into user(first_name, last_name, emai, password) values('kris','davolio','acc@hotmail.com',adc123')");

	while ($row = $result->fetch_assoc()) {
    echo " first name = " . $row['first_name'] . "<br>";
	}


	


?>