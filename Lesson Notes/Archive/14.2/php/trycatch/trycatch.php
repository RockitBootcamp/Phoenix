<?php

// Functions

    class BrigException extends Exception{

    }
   
    function inverse($x) {
        if ($x == 0  || $x == null) {
            throw new BrigException('Division by zero.');
        }
        return 1/$x;
    }

    function myTry($func, $arg){
        try{
            return call_user_func($func, $arg);    
        }
        catch(BrigException $e){

            return "Brig's Exception" . $e->getMessage();
        }
        catch(Exception $e){

            return "Exception" . $e->getMessage();
        }
        finally{
            echo "Done";
        }
        
    }

    function isPositive($num){
        if($num <= 0){            
            throw new Exception("Not positive");            
        }
        return $num;
    }

    function lower($str){
        if(gettype($str) != "string"){
            throw new Exception("Not a string");
        }
        return strtolower($str);
    }

    function age($age){
        if(!is_numeric($age)){
            throw new Exception("Invalid Age notnum");
        }

        if($age >= 108 || $age < 0){
            throw new Exception("Invalid Age");
            
        }
        return $age;
    }
    function password($pass){
        if(is_numeric($pass) && $pass <=0){

            throw new Exception("Bad password (Not a string)");            
        }

        if(strlen($pass) < 8){
            throw new Exception("Bad password");
            
        }
        return $pass;
    }


    echo myTry('inverse', 1), "<br>";
    echo myTry('inverse', 0), "<br>";
    echo myTry('inverse', -1), "<br>";
    echo myTry('inverse', 5), "<br>";

    echo "<h1> Is Positive</h1>";
    echo myTry('isPositive', 1), "<br>";
    echo myTry('isPositive', 0), "<br>";
    echo myTry('isPositive', -1), "<br>";
    echo myTry('isPositive', "abba"), "<br>";
    echo myTry('isPositive', null), "<br>";

    echo "<h1> lower</h1>";
    echo myTry('lower', "Abba"), "<br>";
    echo myTry('lower', "abba"), "<br>";
    echo myTry('lower', 12), "<br>";
    echo myTry('lower', 1.2), "<br>";
    echo myTry('lower', null), "<br>";

    echo "<h1> age</h1>";
    echo myTry('age', 0), "<br>";
    echo myTry('age', 107), "<br>";
    echo myTry('age', 108), "<br>";
    echo myTry('age', pow(2,4)), "<br>";
    echo myTry('age', pow(4,4)), "<br>";
    echo myTry('age', -1), "<br>";
    echo myTry('age', null), "<br>";
    echo myTry('age', "Abba"), "<br>";

    echo "<h1> password</h1>";
    echo myTry('password', 12345678), "<br>";
    echo myTry('password', "1234abcd"), "<br>";
    echo myTry('password', "abcedfgh"), "<br>";
    echo myTry('password', 1234567), "<br>";
    echo myTry('password', "abcedfg"), "<br>";
    echo myTry('password', "abcedfghijk"), "<br>";
    echo myTry('password', null), "<br>";
    echo myTry('password', -12345678), "<br>";

// // Test Area
//     try {
//         echo inverse(0) . "<br>";
//         echo inverse(5) . "<br>";

//         // Check is Positive
//         echo isPositive(1);     // 1
//         echo isPositive(0);     // exception
//         echo isPositive(-1);    // exception
//         echo isPositive("abba");// exception
//         echo isPositive(null);  // exception

//         // Check lower
//         echo lower("Abba");     // abba
//         echo lower("abba");     // abba
//         echo lower(12);         // exception
//         echo lower(1.2);        // exception
//         echo lower(null);       // exception

//         // Check age
//         echo age(0);            // 0
//         echo age(107);          // 107
//         echo age(108);          // exception
//         echo age(-1);           // exception
//         echo age(null);         // exception
//         echo age("Abba");       // exception

//         // Check password
//         echo password(12345678);        // 12345678
//         echo password("1234abcd");      // 1234abcd
//         echo password("abcedfgh");      // abcdefgh
//         echo password(1234567);         // exception
//         echo password("abcedfg");       // exception
//         echo password(null);            // exception
//         echo password(-12345678);       // exception
//         echo password(True);            // exception

//     } catch (Exception $e) {
//         echo 'Please put in positive number. (For you geeks:',  $e->getMessage(), '. Check out line: )';
//         print_r($e);
//     }

// 1. Write a function to check if number is positive
    // Throw if number is negative
   
// 2. Write a function to lowercase a string lower($s)
//    Throw an exception if the $s is not a string

// 3. Write a function to validate Age
    // Throw an exception if not between (0-108)

// 4. Write a function to validate a password
    // Throw an exception if not at least length 8
   





