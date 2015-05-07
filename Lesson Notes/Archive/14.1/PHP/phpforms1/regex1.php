<?php
	// turn on full error reporting for development
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');

	// for validation errors
	$error_array = array();
	$error_string = "";

	// form parameters to carry through
	$first_name = $last_name = $email = $cc_num = "";


	if($_SERVER['REQUEST_METHOD'] == 'POST') {

		// validate first_name
		$first_name = $_POST['first_name'];
		if(! preg_match('/.{3,}/', $first_name)) {
			array_push($error_array, 'Please enter a first name 3 characters or longer');
			$first_name = '';
		} 

		// validate last_name
		$last_name = $_POST['last_name'];
		if(! preg_match('/[a-zA-Z]{5,}/', $last_name)) {
			array_push($error_array, 'Please enter a last name');
			$last_name = '';
		} 

		// validate email address
		$email = $_POST['email'];
		if($email == '') {
			array_push($error_array, 'Please enter an email');
		} else {

			if(! preg_match('/@/', $email)) {
				array_push($error_array, 'Email address must have an \'@\'');
				$email = '';
			}

			if(! preg_match('/\.com$/', $email)) {
				array_push($error_array, "email must end with '.com'");
				$email = '';
			}
		}

		// validate CC number.
		$cc_num = $_POST['cc_num'];
		if($cc_num == '') {
			array_push($error_array, 'Please enter a credit card number');
		} else {
			// clean cc_num of whitespace, dashes, & periods
			$cc_num = preg_replace('/[\w-.]/', '', $cc_num);
			if(! preg_match('/^\d{16}$/', $cc_num)) {
				array_push($error_array, "CC number must be 16 digits");
				$cc_num = '';
			}
		}

		// generate any error output or redirect to success page
		if(count($error_array) > 0) {
			$error_string = join('<br>', $error_array);
		} else {
			header("Location: success.html");
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