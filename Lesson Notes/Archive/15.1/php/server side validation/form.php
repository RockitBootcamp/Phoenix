<?php

require('validate.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$validate = new Validate;
	$validate->notNumber($_GET['first_name']);
	$validate->notNumber($_GET['last_name']);
	$validate->zipCode($_GET['zip']);

	if (count($validate->errorMessages) > 0) {
		print_r($validate->errorMessages);
	} else {
		echo 'form is good';
	}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form method="POST">
		<input type="text" name="first_name" value="<?php echo $_POST['first_name']; ?>">
		<input type="text" name="last_name" value="<?php echo $_POST['last_name']; ?>">
		<input type="text" name="zip" value="<?php echo $_POST['zip']; ?>">
		<button>Submit</button>
	</form>
	
</body>
</html>