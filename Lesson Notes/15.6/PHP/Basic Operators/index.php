<?php

$sum = 5 + 6; // addition operator
$mult = 3 * 3; // multiplication op
$sub = 1 - 3; // subtraction op
$div = 6 / 2; // division op
$mod = 5 % 2; // modulus op
// $exp = 6 ** 10; // exponentiation op (if you're on php 5.6+)

$x = 6 * (3 % 2); // parens create groups, groups define order of operations

$y = (5 * (4 + 9) - $x) / 2;

// string concat

$string = "Hello" . " world"; // dot (.) means to concat
$someothervar = "!!!";

$excited = $string . " " . $someothervar;

echo $excited;

// assignment modifiers

$y += 3; // add and assign
$y = $y + 3; // the hard way

$x -= 2; // subtract and assign
$x = $x - 2; // the hard way

$excited .= "!!!";

// others
// /=
// *=

$x %= 3;

echo $x;
