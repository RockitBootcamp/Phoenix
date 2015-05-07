<?php 

	error_reporting(E_ALL);
	ini_set('display_errors', 'on');

	$string = file_get_contents("realestate_data_clean.json");
	$cities=json_decode($string,true);	

	
	// Homework 1
	// Print the CurMonthRank or each City

	// Homework 2
	// Print the Listings_MM and MedianAge_MM of each City

	// Homework 3
	// Print the Sum of CurMonthRank for all cities

	// Homework 4
	// Find the City with the Lowest Rank

	// Homework 5
	// Find the City with the Highest Rank

	// Homework 6
	// Find the City with the Lowest PrevMonthRank

	// Homework 7
	// Find the City with the Greatest Change between Rank and PrevMonthRank

	// Homework 8
	// Find the City with the Highest MedianPrice / MedianAge

	// Homework 9
	// Find the Top Ten Cities sorted by City Name

	// Homework 10
	// Bonus Implement your own Bubblesort















?>