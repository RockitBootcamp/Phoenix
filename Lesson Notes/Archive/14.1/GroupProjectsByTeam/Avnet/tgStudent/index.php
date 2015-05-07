<?php

	session_start();
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');

	$error_array = array();
	$error_string = "";
	$first_name = "";
	$last_name = "";
	$email = "";
	$credit = "";
	$phone = "";

	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		if(strlen($_POST['first_name']) < 3) {
			array_push($error_array, 'Please enter a first name of 3 or more characters');
		} else {
			$first_name = $_POST['first_name'];
			$_SESSION["first_name"] = $first_name;
		}

		if(strlen($_POST['last_name']) < 3) {
			array_push($error_array, 'Please enter a last name of 3 or more characters');
		} else {
			$last_name = $_POST['last_name'];
			$_SESSION["last_name"] = $last_name;
		}

		$email = $_POST['email'];
		$_SESSION["email"] = $email;

		if($_POST['email'] == '') {
			array_push($error_array, 'Please enter an email');
		} else {
			$pos = strpos($email, '@');
			if($pos === false) {
				array_push($error_array, 'Please enter a valid email address');
			} else {
				if(substr($email, -4) != '.com') {
					array_push($error_array, "Please enter a valid email address");
				}
			}
		}

		if($_POST['phone'] == '') {
			array_push($error_array, 'Please enter a valid phone number');
		} else {
			$phone = $_POST['phone'];
		$_SESSION["phone"] = $phone;
		}

		if(count($error_array) > 0) {
			foreach($error_array as $e) {
				$error_string = $error_string . $e . "<br>"; 
			}
		} else {
			header("Location: studentOverview.php");
			exit;
		}
	}
?>


<!-- **********HTML/PHP Divider********** -->
<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="favicon.ico">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="main.js"></script>
	<title>Create New User</title>
</head>

<body>

<div class="mainContainer">

	<header>
		<img src="AVNET-INC-sRGB-150x53px.png" alt="" class="logo">
		
		<h2>Create New User</h2>
		<nav class="siteNav">
			<a href="#">Home</a> |
			<a href="studentOverview.php">Students</a> |
			<a href="#">Games</a>
		</nav>
	</header>

	<main>
		<div class="formTitle">
			<span>User Information</span>
		</div>
		<div class="error"><?php print_r($error_string); ?></div>

    	<form action="" method="POST">

	        <input type="text" id="first_name" name="first_name" placeholder="First Name" value="<?php echo $first_name ?>"> <br>
	        <span id="l_first_name"></span>
	        <input type="text" name="last_name" placeholder="Last Name" value="<?php echo $last_name ?>"> <br>
	        <span></span>
	        <input type="email" name="email" placeholder="Email" value="<?php echo $email ?>"> <br>
	        <span></span>
	        <input type="tel" name="phone" placeholder="Phone Number" value="<?php echo $phone ?>"> <br>
	        <span></span>

	        <button class="save" type="submit">Save</button>
	        <button class="cancel" type="cancel" onclick="window.location='studentOverview.php';return false;">Cancel</button>

    	</form>
		
    </main>

	<footer>
		
	</footer>

</div>
	
</body>
</html>