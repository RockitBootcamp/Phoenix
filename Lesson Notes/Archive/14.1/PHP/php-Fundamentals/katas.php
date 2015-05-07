<!DOCTYPE html>
<html>
  <head>
    <link type='text/css' rel='stylesheet' href='style.css'/>
    <title>PHP!</title>
  </head>
  <body>
       
      <?php

      	$number = 42;
   
        // if ($number <= 9) {
        //     echo "Less than or equal to 9";
        // } else {
        //     echo "Greater than 9";
        // }


      	// Kata 1
        // If number == 56 then echo Yahoo Else echo boo


      	// Kata 2
      	$number = 42;
      	// If number == 42 then echo "That's the answer"
      	// Else if the number is 56 then echo Yahooo
      	// if not either of those then echo "boo"












      	// Kata 3
      	$number = 42;
      	// If number is < 10 echo "small number"
      	// Else if the number is greater 10 and < 100 echo "Getting bigger"
      	// Else if the number is greather 100 and < 1000 echo "This is big"
      	// otherwise echo "Too big for me!"
      	// if($number < 10){
      	// 	echo "small number";
      	// }
      	// else if($number < 100){
      	// 	echo "Getting Bigger";
      	// }
      	// else if($number < 1000){
      	// 	echo "This is big";
      	// }
      	// else{
      	// 	echo "Too big for me";
      	// }















      	// Kata 4
      	

     //  	$i = 4;
    
	    // switch ($i) {
	    //     case 0:
	    //         echo '$i is 0.';
	    //         break;	       
	    //     case 1:
	    //     case 2:
	    //     case 3:
	    //     case 4:
	    //     case 5:
	    //         echo '$i is somewhere between 1 and 5 (inclusive).';
	    //         break;	       
	    //     case 7:
	    //         echo '$i is between 5 and 7.';
	    //         break;
	    //     default:
	    //         echo "I don't know how much \$i is.";
	    // }



	    // Kata 4

	    // $items = array("Egg", "Tomato", "Beans");

	 //    foreach ($items as $a) {
		//    echo($a);
		// }

	 //    $items = array("Egg", "Tomato", "Beans");
		// $length = count($items);

		// for ($i = 0; $i < $length; $i++) {
		// 	echo $i . " ";
		//   	echo $items[$i];
		//   	echo "<br>";
		// }








		// Kata 5
		// For every item in the array pizzaType
		// "Special", "Regular", "On Sale"
		// for each item in pizzaType
			// Print out the items.




		// Kata 6
		// For every item in the array pizzaType
		// "Special", "Regular", "On Sale"
		// for each item in pizzaType			
			// If ... pizzaType is "Regular"
				//echo "$12"
			// If ... pizzaType is "Special"
				// echo "$15"
			// If pizzaType is "On Sale"
				// Echo "$10"
			
		$pizzaType = array("Special", "Regular", "On Sale");
		foreach($pizzaType as $a){

			if($a == "Special"){
				echo "15";
			}
			elseif($a == "Regular"){
				echo "12";
			}
			elseif($a == "On Sale"){
				echo "10";
			}
			else{
				echo "??";	
			}

		}

      ?>
   
  </body>
</html>















