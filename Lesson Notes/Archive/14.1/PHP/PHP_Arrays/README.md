Introduction to PHP Arrays

# Objectives
* Demonstrate two different ways to access an Item in an array
* Demonstrate modifying Array elements
* Demonstrate removing Array elements

# Lesson

* Two ways to access array

Example on accessing Elements in array:

	$myFriends = array("Sam", "George", "Harry");
	echo $myFriends[2];
	echo $myFriends{2};

Example to modify an element in an array

	$myFriends = array("Sam", "George", "Harry");
	$myFriends[1] = "Mike";
	echo $myFriends[1];	

Example to remove an element in an array

	$myFriends = array("Sam", "George", "Harry");
	unset($myFriends[1])
	
	foreach($myFriends as $friend){
		echo "<p>$friend</p>";	
	}


## Exercises
1. Create array of friends with 4 people in it ("Sam", "Mike", "George", "Harry")
2. Echo out the third Element "George"
3. Modify second element "Mike" to "Albert" and echo out 
4. Remove the 3rd element "George" (Use a foreach loop to display the elements in the array)

# Homework
1. Create an array with 10 elements of fruit (Apple, Banana, Cherry, Date, Elderberry, Fig, Grape, Honeydew, ilama, jujube)
2. Echo out the 6th element "Fig".
3. Modify the 3th element (Cherry) to Cranberry.
4. Remove the 5th element (Elderberry) (Use a foreach loop to display the elements in the array)

# Resources
* [Code Academy](http://www.codecademy.com/courses/web-beginner-en-StaFQ/0/1?curriculum_id=5124ef4c78d510dd89003eb8)
* [PHP Refernce](http://cdn.phpreferencebook.com/wp-content/uploads/2008/12/php_reference_-_beginner_to_intermediate_php5.pdf)




