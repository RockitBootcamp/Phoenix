<?php

include('initialize.php');
//include('user.php');
include('member.php');


// First line of defense: See if it is a number at all
if (!is_numeric($_GET['user_id'])) {
	die('User ID is not a number');
}


$member = new Member($db, $_GET['user_id']);




?>

<!doctype html>
<html lang="en">
<head>

</head>
<body>

	<?php include('header.php'); ?>

	<div class="profile">
		<h1><?php echo $member->name; ?></h1>
		<p>Friends: <?php echo $member->friends; ?></p>
	</div>

</body>
</html>