<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="myProfile.css">
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  	<script type="text/javascript" src="myProfile.js"></script>
  	<!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
	<title>My Account</title>
</head>


<body>

	<header>

		<img src="AVNET-INC-sRGB-150x53px.png" alt="" class="logo">
		<h2>My Account</h2>
		<nav class="siteNav">
			<a href="#">Home</a> |
			<a href="#">Teams</a> |
			<a href="#">Games</a>
		</nav>
		<div class="divider1"></div>
		<div class="divider2"></div>

	</header>

	<div class="mainContainer">

<!-- ****** vertical tabs ui begin ******************** -->
		<div id="tabs">

		  	<ul class="tabContainer">
			    <li><a href="#tabs-1">My Profile</a></li>
			    <li><a href="#tabs-2">Sign In Info</a></li>
			    <li><a href="#tabs-3">Contact Info</a></li>
			    <li><a href="#tabs-4">My Schedule</a></li>
		  	</ul>

		  	<div id="tabs-1">
			    <img src="blankprofilepic.jpg" alt="pic 300x300">

				<div class="profileInfo">

					<div> 
						<span> First Name: </span>
						<input type="text" class="firstName" value="Ron"></input>
					</div>
					<div> 
						<span> Last Name: </span>
						<p class="lastName"> Bojangles </p>
					</div>
					<div> 
						<span> School: </span>
						<p class="school"> University of Tech</p>
					</div>
					<div> 
						<span> Bio: </span>
						<p class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, maxime amet dicta incidunt esse fugiat officiis corrupti adipisci. Mollitia, vero, quo cumque dolorum porro quasi quas cum doloremque nisi dolores.</p></div>
					<div class="schedule">
						<p class="schedule">Schedule:</p>
						<div class="scheduleItem">
							<span class="time">1030am-1130am</span>
							<span class="game">Game 1</span>
							<span class="team">Team X</span>
						</div>
						<div class="scheduleItem">
							<span class="time">130pm-230pm</span>
							<span class="game">Game 4</span>
							<span class="team">Team Z</span>
						</div>
					</div>
				</div>
			</div>

			<div id="tabs-2">
			    <h2>My Sign-In Info</h2>
			   	<div class="signinInfo">

					<div> 
						<span> Email: </span>
						<p class="email"> RonBoj@tech.edu </p>
					</div>
					<div> 
						<span> Password: </span>
						<button id="passwordChange"> Change Password</button>
					</div>
				</div>
			</div>

			<div id="tabs-3">
			    <h2>My Contact Info</h2>
			   	<div class="contactInfo">

					<div> 
						<span> Email: </span>
						<p class="email"> RonBoj@tech.edu <input type="checkbox" name="privacy" value="email" ?> make private</p>
					</div>
					<div> 
						<span> Address: </span>
						<p class="address"> 1234 N. Main St. Tempe, AZ 85282</p>
					</div>
					<div> 
						<span> Phone: </span>
						<p class="phone"> (480)555-1234</p>
					</div>
					<div>
						<span> Contact Preference:</span>
						<p> <input type="checkbox" name="preference" value="email" checked> Email </p><br>
						<p> <input type="checkbox" name="preference" value="phone" checked> Phone </p>
					</div>
				</div>
			</div>
			<div id="tabs-4">
			  	<h2>My Schedule</h2>
				<div class="schedule">
					<p class="schedule">Schedule:</p>
					<div class="scheduleItem">
						<span class="time">1030am-1130am</span>
						<span class="game">Game 1</span>
						<span class="team">Team X</span>
					</div>
					<div class="scheduleItem">
						<span class="time">130pm-230pm</span>
						<span class="game">Game 4</span>
						<span class="team">Team Z</span>
					</div>
				</div>
			</div>

		</div>
<!-- ********* vertical tabs ui end *****************-->

<!-- 		<div class="tabs">
			<div class="blank"> </div>
			<div class="myProfileTab">My Profile
			</div>
			<div class="signinInfoTab">Sign In Info
			</div>
			<div class="contactInfoTab">Contact Info
			</div>
			<div class="myGamesTab">My Games
			</div>
			<div class="myTeamsTab">My Teams
			</div>

		</div>

		<div class="myProfile">

			<img src="" alt="pic 300x300">

			<div class="profileInfo">

				<div> 
					<span> First Name: </span>
					<p class="firstName"> Ron </p>
				</div>
				<div> 
					<span> Last Name: </span>
					<p class="lastName"> Bojangles </p>
				</div>
				<div> 
					<span> School: </span>
					<p class="school"> University of Tech</p>
				</div>
				<div> 
					<span> Bio: </span>
					<p class="bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, maxime amet dicta incidunt esse fugiat officiis corrupti adipisci. Mollitia, vero, quo cumque dolorum porro quasi quas cum doloremque nisi dolores.</p></div>
				<div class="schedule">
					<p class="schedule">Schedule:</p>
					<div class="scheduleItem">
						<span class="time">1030am-1130am</span>
						<span class="game">Game 1</span>
						<span class="team">Team X</span>
					</div>
					<div class="scheduleItem">
						<span class="time">130pm-230pm</span>
						<span class="game">Game 4</span>
						<span class="team">Team Z</span>
					</div>
				</div>

			</div>


		</div>
 -->
	</div>

	<footer>
		
	</footer>
	
</body>

</html>