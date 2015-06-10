<?php

$a = 'String';
$a = 5;
$a = 6;
$a = true;
$a = false;
$a = null;
$a = [1,2];

$a = '5';
$a = 5;

$a = 5 + 5;
$a = 6 + 5 + 4;

$a = 5;
$b = 7;

$c = $a + $b; // => 12

$a = 5.1; // float
$b = 7; // integer

// explicit
$c = (int)$a + $b; // => 12


$a = 5;
$b = 7;

// implicit
$c = $a . $b; // => "57"

$d = (int)($a / $b);


$price = 5.23;
$cartTotal = 'Total = ' . $price;



$a = 6 / 9;
$a = 5 * 2;
$a = 6 % 5;
$a = 5 + 5;
$a = 5 - 2;
$a = 5 ** 4;

$a = (5 / 5) + (8 + (4 ** 4));

$a = 6;
$a += 8; // => 14
$a = $a + 8; // => 22

$a = 'Hello ';
$b = 'world'; // => "Hello world"
$a .= $b; // => "Hello world"
$a = $a . $b;

$a = $a + 1;
$a += 1;
$a++;

$a--;


// output = 'Total: 5.58'
$a = 5;
$b = 0.12;
$tax = 1.09;
$output = 'Total: ' . ($a + $b) * $tax;



// using 2 variables (one string, one integer)
//  output "50 states"

$a = 50;
$b = ' States';
$a .= $b;
echo $a;

// add 2
$bar = 5;
$bar += 2;

