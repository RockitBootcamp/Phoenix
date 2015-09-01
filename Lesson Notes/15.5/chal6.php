<?php

$states = Array("AL", "AK", "AZ", "AR");

echo $states[0];

$cities = ["Boston", "Pheonix", "Salt Lake"];
echo $cities[2];

// Add new item
$cities[] = "Mesa";
echo $cities[3];

// Update an existing value?
echo $cities[1];
$cities[1] = "Phoenix";
echo $cities[1];


$x = Array('first_name' => 'Joe', 'last_name' => 'Smith');
echo($x["first_name"]);

$x = ['first_name' => 'Joe', 'last_name' => 'Smith'];

// Challenge
// 1 Create an array of Fruit and echo out the 3rd item
// 2 Create an array of Prime Numbers and echo out the 5th one
// 3 Create an associative array of State=>Capitals ... 2nd
// 4 Create an associative array of Movie=>Ratings ... 1st

echo $cities;
echo print_r($cities);

echo in_array("Mesa", $cities);

array_push($cities, "Queen Creek");
print_r($cities);
$cities[] = "Gilbert";

print_r($cities);

array_pop($cities);
print_r($cities);


echo array_key_exists("first_name", $x);

$y = implode($cities);
echo($y);


$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
echo($pizza);
$pieces = explode(" ", $pizza);

print_r($pieces);

$text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores voluptates tempora sequi provident nobis consequuntur aliquam laudantium alias voluptatibus harum possimus nulla, explicabo exercitationem velit dolorum ipsa fugit necessitatibus voluptate!";

$t = explode(" ", $text);

print_r($t);

// Challenge 1. Explode the poem If by Kipling into words
// Challenge 2. Implode the array ["I", "love", "beans"]
// Challenge 3. Check if the key exists for 'c'
    // ["a"=>"1", "b"=>2, "c"=> 3]
// Challenge 4. Use push and pop to manage an array of colors



$poem = "If you can keep your head when all about you   
    Are losing theirs and blaming it on you,   
If you can trust yourself when all men doubt you,
    But make allowance for their doubting too;   
If you can wait and not be tired by waiting,
    Or being lied about, don’t deal in lies,
Or being hated, don’t give way to hating,
    And yet don’t look too good, nor talk too wise:

If you can dream—and not make dreams your master;   
    If you can think—and not make thoughts your aim;   
If you can meet with Triumph and Disaster
    And treat those two impostors just the same;   
If you can bear to hear the truth you’ve spoken
    Twisted by knaves to make a trap for fools,
Or watch the things you gave your life to, broken,
    And stoop and build ’em up with worn-out tools:

If you can make one heap of all your winnings
    And risk it on one turn of pitch-and-toss,
And lose, and start again at your beginnings
    And never breathe a word about your loss;
If you can force your heart and nerve and sinew
    To serve your turn long after they are gone,   
And so hold on when there is nothing in you
    Except the Will which says to them: ‘Hold on!’

If you can talk with crowds and keep your virtue,   
    Or walk with Kings—nor lose the common touch,
If neither foes nor loving friends can hurt you,
    If all men count with you, but none too much;
If you can fill the unforgiving minute
    With sixty seconds’ worth of distance run,   
Yours is the Earth and everything that’s in it,   
    And—which is more—you’ll be a Man, my son!";


// Remove special characters.

$specials = ["'", "-", ",", "’", "—", ":", ";", "‘", '!'];

$poem = str_replace($specials, "", $poem);

$break = [" ", "\n"];
$words = explode($break, $poem);

print_r($words);

