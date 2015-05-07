<?php 

	error_reporting(E_ALL);
	ini_set('display_errors', 'on');

	$string = file_get_contents("realestate_data_clean.json");
	$cities=json_decode($string,true);	

	// Exercise 1.
	// Print each City Name
	foreach($cities as $city){
		echo "<p>" . $city["MSA_City"] . "</p>";
	}

	// Exercise 2.
	// Print each City Name and Number of Listings
	foreach($cities as $city){
		echo "<p>" . $city["MSA_City"] . " " . $city["Listings"] . "</p>";
	}

	// Exercise 3.a
	// Print total number of listing for all cities
	$total = 0;
	foreach($cities as $city){
		$total = $total +  $city["Listings"];		
	}
	echo "<p>Total Listings: $total</p>";	
	
	// Exercise 3.b
	// Print total number of MedianAge
	// add up all of the MedianAge
	$totalMedianAge = 0;
	foreach($cities as $city){
		$totalMedianAge = $totalMedianAge +  $city["MedianAge"];		
	}
	echo "<p>Total Median Age: $totalMedianAge</p>";
	
	// Exercise 3.c
	// Find the Average MedianAge
	$totalMedianAge = 0;
	foreach($cities as $city){
		$totalMedianAge = $totalMedianAge +  $city["MedianAge"];		
	}
	$countMedianAge = count($cities);
	$aveMedianAge = $totalMedianAge / $countMedianAge;
	echo "<p>Ave Median Age: $aveMedianAge</p>";
	
	// Exercise 4
	// Find the City with the least Listings
	$minListings = $cities[0]["Listings"]; // Choose a city as a starting point
	$minCity = $cities[0]["MSA_City"];
	foreach($cities as $city){
		if($city["Listings"] < $minListings){
			// Found the city, update my value
			$minListings = $city["Listings"];
			$minCity = $city["MSA_City"];
		}
			
	}	
	echo "<p>City with Least Listings: $minCity at $minListings</p>";
	

	// Exercise 5
	// Find the City with the Most listing
	$maxListings = 0; // Start with a small value
	$maxCity = "Unknown";
	foreach($cities as $city){
		if($city["Listings"] > $maxListings){
			// Found the city, update my value
			$maxListings = $city["Listings"];
			$maxCity = $city["MSA_City"];
		}
			
	}	
	echo "<p>City with Most Listings: $maxCity at $maxListings</p>";
	



	// Exercise 6 
	// Find the city with the most expensive listings
	$maxPrice = 0; // Start with a small value
	$maxCity = "Unknown";
	foreach($cities as $city){
		if($city["MedianPrice"] > $maxPrice){
			// Found the city, update my value
			$maxPrice = $city["MedianPrice"];
			$maxCity = $city["MSA_City"];
		}
			
	}	
	echo "<p>City with Most Expensive Listings: $maxCity at $maxPrice</p>";

	// San Franscico 867,280
	





	// Exercise 7 
	// Find the City with the least expensive Listing
	$minPrice = $cities[0]["MedianPrice"]; // Choose a city as a starting point
	$minCity = $cities[0]["MSA_City"];
	foreach($cities as $city){
		if($city["MedianPrice"] < $minPrice){
			// Found the city, update my value
			$minPrice = $city["MedianPrice"];
			$minCity = $city["MSA_City"];
		}
			
	}	
	echo "<p>City with Least Expensive Listings: $minCity at $minPrice</p>";
	




	// Exercise 8 
	// Find the City with the Oldest Median time on market
	$maxAge = 0; // Start with small number
	$maxAgeCity = $cities[0]["MSA_City"];
	foreach($cities as $city){
		if($city["MedianAge"] > $maxAge){
			// Found the city, update my value
			$maxAge = $city["MedianAge"];
			$maxAgeCity = $city["MSA_City"];
		}
			
	}	
	echo "<p>City with Oldest Median time on market: $maxAgeCity at $maxAge</p>";
	


	// Exercise 9
	// Find the City with the Shortest Sale in the top 10 Richest City
	
	usort($cities, "cmp");

	$i = 0;
	$minCity =  "";
	$minAge = $cities[0]["MedianAge"];
	$cityPrice = "";

	foreach($cities as $city){

		if($city["MedianAge"] < $minAge){
			// Found it
			$minAge = $city["MedianAge"];
			$minCity = $city["MSA_City"];
			$cityPrice = $city["MedianPrice"];
		}

		// How many cities have a I looked at
		$i = $i + 1;
		if($i > 9){
			break;
		}
	}
	echo $minCity . " with " . $minAge . " and " . $cityPrice;

	function cmp($a, $b)
	{
	    return $a["MedianPrice"] < $b["MedianPrice"];
	}


	// Exercise 


















?>