<?php

  error_reporting(E_ALL);
  ini_set('display_errors', 'on');


  // incorporate the connection script
  require ('connect.php');

  if ( mysqli_ping( $dbc )) {
  	echo 'MySQL Server ' . mysqli_get_server_info( $dbc ) . ' on ' . mysqli_get_host_info( $dbc );
  }

  $title = $_POST['title'];
  $details = $_POST['details'];
  $sponsor = $_POST['sponsor'];
  $location = $_POST['location'];
  $capacity = $_POST['capacity'];
  $registration_state = $_POST['registration_state'];
  $start_time = $_POST['start_time'];
  $end_time = $_POST['end_time'];

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

</head>


<body>
	<header>

		<img src="img/Avnet_Inc_Logos/1--For web, digital/300 x 105 px/AVNET-INC-sRGB-300x105px.png
">
		<h1>Create New Game</h1>

		<nav>
			<a href="/">Home</a>
			<a href="game_overview.php">Games Overview</a>
			<a href="/">Teams</a>
		</nav>

	</header>

	<div class="subhead">
		Game UPDATED
	</div>

  <div class="main">
    <h1>The following information was posted...</h1>
    <div>
      <?php
        echo "$title <br>";
        echo "$details <br>";
        echo "$sponsor <br>";
        echo "$location <br>";
        echo "$capacity <br>";
        echo "$registration_state <br>";
        echo "$start_time <br>";
        echo "$end_time <br>";
      ?>
    </div>
	</div>


</body>
</html>

	<!-- Game Name: 
	Time
	Duration
	Description
	Capacity (How many teams in each game)
	Sponsor (i.e. cisco, etc)
	Supporting Sponsor
	Game Owner
	Judge
	Location
	Team Size
	Registration Status
	Equipment Requirements
	Skills recommended
	Teams Registered for this game -->
