<?php
	// turn on full error reporting for development
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');

	// for validation errors
	$error_array = array();
	$error_string = "";

	// form parameters to carry through
	$first_name = "";
	$last_name = "";
	$email = "";
	$cc_num = "";

	if($_SERVER['REQUEST_METHOD'] == 'POST') {

		// validate first_name
		if(strlen($_POST['first_name']) < 3) {
			array_push($error_array, 'Please enter a first name 3 characters or longer');
		} else {
			$first_name = $_POST['first_name'];
		}

		// validate last_name
		if($_POST['last_name'] == '') {
			array_push($error_array, 'Please enter a last name');
		} else {
			$last_name = $_POST['last_name'];
		}

		$email = $_POST['email'];

		// validate email address
		if($email == '') {
			array_push($error_array, 'Please enter an email');
			$email = '';
		} else {

			$pos = strpos($email, '@');
			if($pos === false) {
				array_push($error_array, 'Email address must have an \'@\'');
				$email = '';
			}

			if(substr($email, -4) != '.com') {
				array_push($error_array, "email must end with '.com'");
				$email = '';
			}
		}

		// validate CC number.
		$cc_length = 5;
		$cc_num = $_POST['cc_num'] ;
		if(! $cc_num) {
			array_push($error_array, 'Please enter a credit card number');
			$cc_num = '';
		} else {
			if(strlen($cc_num) != $cc_length) {
				array_push($error_array, "CC number must be $cc_length digits");
				$cc_num = '';
			}

			if(! ctype_digit($cc_num)) {
				array_push($error_array, 'CC number can only contain digits');
				$cc_num = '';
			}
		}

		// generate any error output or redirect to success page
		if(count($error_array) > 0) {
			foreach($error_array as $e) {
				$error_string = $error_string . $e . "<br>"; 
			}	
		} else {
			header("Location: success.html?name=daniel");
			exit;
		}
	}


?>



<html lang="en">
<head>
	<title>Hello PHP Forms</title>
	<style>
	.error {
		color: red;
	}
	</style>
</head>
<body>
	<div class="error"><?php echo($error_string); ?></div>
	<form action="" method="POST">
		FName: <input type="text" name="first_name" value="<?php echo $first_name ?>"><br>
		LName: <input type="text" name="last_name" value="<?php echo $last_name ?>"><br>
		Email: <input type="text" name="email" value="<?php echo $email ?>"><br>
		Money Here: <input type="text" name="cc_num" value="<?php echo $cc_num ?>"><br>
		<button type="submit">Let's Go!</button>
	</form>
</body>
</html>