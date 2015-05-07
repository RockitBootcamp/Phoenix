Objectives
------
* Explain the purpose of making your own function
* Demonstrate proper function declaration
* Explain and demonstrate the return statement


Why Functions
----
* code reuse
* abstraction of ideas
* making shorter chunks of cod

Example of Function
-----
````
function add($num1, $num2){
	return $num1 + $num2;
}

````
Let's use it

````

$x = 1;
$y = 2;

echo add($x, $y);

// Prints out 3

````

Optional Parameters
------
Sometime we want parameters to be optional. In these cases we may want to have a default value

````
function doSomething($foo, $bar=true){
	// do something with $foo and $bar
}

````


Kata
------
* Create a function to add three numbers
* Create a function to subtract two numbers
* Create a function to multiply two numbers
* Create a funciton to multiply three numbers
* Create a function to get FullName from FirstName and LastName
* Create a function to get the largest number between two numbers
* Create a function to get the smallest number between two numbers
* *Bonus* Create a function to print "Mr", "Mrs" and the full name given FirstName, LastName, and isMale
* *Bonus* Create a function to print "Mr", "Mrs" and the full name given FirstName, LastName, and isMale is an optional parameter with a default of true


Resources
-------
* [Functions](http://www.w3schools.com/php/php_functions.asp)