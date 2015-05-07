<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP Arrays - Exercises</title>
</head>
<body>
	
	<h1>Exercises</h1>

	<?PHP

	// Exercise 1
	// Create array of friends with 4 people in it ("Sam", "Mike", "George", "Harry")
	$friends = array("Sam", "Mike", "George", "Harry");
	
	// Exercise 2
	// Echo out the third Element "George"
	echo $friends[2];

	// Exercise 3
	// Modify second element "Mike" to "Albert" and echo out
	$friends[1] = "Albert";

	// Exercise 4
	// Remove the 3rd element "George" (Use a foreach loop to display the elements in the array)
	unset($friends[2]);

	foreach($friends as $friend){
		echo "<p>$friend</p>";
	}

	?>

</body>
</html>