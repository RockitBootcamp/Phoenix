<?php

  error_reporting(E_ALL);
  ini_set('display_errors', 'on');


  // incorporate the connection script
  require ('connect.php');

  if ( mysqli_ping( $dbc )) {
  	echo 'MySQL Server ' . mysqli_get_server_info( $dbc ) . ' on ' . mysqli_get_host_info( $dbc );
  }

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	  <title>AVNET Games | Create New Game</title>
	  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	  <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	  <link rel="stylesheet" type="text/css" href="styles.css">
	  <script src="games.js"></script>

	 <!-- Calendar Script -->
		  <script>
		  $(function() {
		    $( "#datepicker" ).datepicker();
		  });
		  </script>

</head>


<body>
	<header>

		<img src="img/Avnet_Inc_Logos/1--For web, digital/300 x 105 px/AVNET-INC-sRGB-300x105px.png
">
		<h1>Create New Game</h1>

		<nav>
			<a href="">Home</a>
			<a href="index.php">Games Overview</a>
			<a href="">Teams</a>
		</nav>

	</header>
	<div class="subhead">
		Game Information
	</div>

	<div class="main">

		<div class="form">
			<form action="success.php" onsubmit="formValidation()" method="POST" id="game_form">
				<input type="text" name="title" class="title" minlength="2" placeholder="Title"><br>
				<textarea rows="6" cols="70" name="details" class="details" form="game_form" placeholder="Enter game description here"></textarea><br>
				<input type="text" name="sponsor" class="sponsor" placeholder="Sponsor"><br>
				<input type="text" name="location" class="location" placeholder="Location"><br>
        <input type="text" id="capacity" name="capacity" placeholder="Capacity"><br>
        <input type="text" id="registration_state" name="registration_state" placeholder="Reg State"><br>
        <input type="text" id="start_time" name="start_time" placeholder="Start Time"><br>
				<input type="text" id="end_time" name="end_time" placeholder="End Time"><br>
				<button id="test" class="submit_game">Submit</button>

			</form>
			
		</div>
	</div>


</body>
</html>