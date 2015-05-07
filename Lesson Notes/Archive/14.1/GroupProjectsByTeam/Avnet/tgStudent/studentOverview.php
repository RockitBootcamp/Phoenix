<?php session_start();?>


<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<script type="text/javascript" src="studentOverview.js"></script>
	<link rel="stylesheet" type="text/css" href="overview.css">
	<link rel="shortcut icon" href="favicon.ico">
	<title>Student Listings</title>
	<style>
    
    
  </style>
</head>

<body>

	<div class="maincontainer">
		
		<header>
			<img src="AVNET-INC-sRGB-150x53px.png" alt="" class="logo">
			<h2>Student Listings</h2>
			<nav class="siteNav">
				<a href="#">Home</a> |
				<a href="#">Students</a> |
				<a href="#">Games</a>
			</nav>
		</header>

		<main>

<!-- **** dialog begin ********* -->
			<div id="dialog-form">
				<span>Create New User</span>
				<img src="AVNET-INC-sRGB-150x53px.png" alt="" class="logo">
				  <p class="validateTips">All form fields are required.</p>
				 
				  <form>
				  <fieldset>
				    <label for="name">Name</label>
				    <input type="text" name="name" id="name" class="text ui-widget-content ui-corner-all">
				    <label for="email">Email</label>
				    <input type="text" name="email" id="email" value="" class="text ui-widget-content ui-corner-all">
				    <label for="password">Password</label>
				    <input type="password" name="password" id="password" value="" class="text ui-widget-content ui-corner-all">
				  </fieldset>
				  </form>
			</div>
<!-- **** dialog end *********-->

			<div class="listTitle">
				<span class="titleLast">Last</span>
				<span class="titleFirst">First</span>
				<span class="titlePhone">Phone</span>
				<span class="titleEmail">Email</span>
				<button class="createNew" onclick="window.location='index.php'">Create New</button>
			</div>

			<div class="allStudents">			
				<div class="student">
					<span class="last"><?php echo $_SESSION["last_name"] ?></span>
					<span class="first"><?php echo $_SESSION["first_name"] ?></span>
					<span class="phone"><?php echo $_SESSION["phone"] ?></span>
					<span class="email"><?php echo $_SESSION["email"] ?></span>
					<button class="edit">Edit</button>
					<button class="delete">Delete</button>
				</div>
			<?php 

				error_reporting(E_ALL);
				ini_set('display_errors', 'on');

				$string = file_get_contents("student_data.json");
				$students = json_decode($string,true);


				foreach ($students as $student) {
					echo "<div class='student'>";
					echo "<span class='last'>" . $student['LastName'] . "</span>";
					echo "<span class='first'>" . $student['FirstName'] . "</span>";
					echo "<span class='phone'>" . $student['Phone'] . "</span>";
					echo "<span class='email'>" . $student['Email'] . "</span>";
					echo "<button class='edit'>Edit</button>";
					echo "<button class='delete'>Delete</button>";
					echo "</div>";
					echo "<br>";
				}

			?>

			</div>
			
		</main>

		<footer>
		</footer>

	</div>

</body>
</html>