<?php 
  error_reporting(E_ALL);
  ini_set('display_errors', 'on');

  // incorporate the connection script
  require ('connect.php');

  if ( mysqli_ping( $dbc )) {
    echo 'MySQL Server ' . mysqli_get_server_info( $dbc ) . ' on ' . mysqli_get_host_info( $dbc );
  }

  $queryTables = 'SHOW TABLES';
  $results = mysqli_query($dbc,$queryTables);

  if ($results) {
    echo "<h3>Resource Link Returned OK</h3>";
  } else {
    echo "<p> " . mysqli_error($dbc) . '</p>';
  }

?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <title>AVNET Games | Game Overview</title>
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
    <h1>Game Overview</h1>

    <nav>
      <a href="/">Home</a>
      <a href="/">Games</a>
      <a href="/">Teams</a>
    </nav>

  </header>
  <div class="subhead">
    Add/Edit Games
      <div class="create-game">
        <button class="create-btn" onclick="location.href='add_edit_games.php'">Create a NEW Game</button>
      </div>
  </div>

  <div class="main">
    <div class="games-list">

      <ul>
        <li><button class="edit">Edit</button> HP Build the Fastest Computer </li>
        <li><button class="edit">Edit</button> Cisco Networking Expert Battle</li>
        <li><button class="edit">Edit</button> Desktop Domination</li>
        <li><button class="edit">Edit</button> Digital Design Dilemma</li>
        <li><button class="edit">Edit</button> EMC Green Data Center Challenge</li>
        <li><button class="edit">Edit</button> Green Video Competition</li>
        <li><button class="edit">Edit</button> Java Blitz</li>
        <li><button class="edit">Edit</button> Robot Race Obstacle Course</li>
        <li><button class="edit">Edit</button> Solar Scrimmage</li>
        <li><button class="edit">Edit</button> JDA Supply Chain Challenge</li>
        <li><button class="edit">Edit</button> Virtual Android App Showdown</li>
      </ul>

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
