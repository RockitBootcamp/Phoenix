<?php
// Basic Concepts

// $var = 'value';

// $single = 'single';
// $double = "double\ndouble vs $single"; // "double\ndouble single"

// echo $double;

// single
/* double */

// include 'random.php';
// include_once 'random.php';

// include_once 'header.php';
// include_once 'footer.php';

// same as includes but will "die" on errors
// require 'random.php';
// require_once 'random.php';

// die(); // stop executing completely an exit

// Variable TYpes

// $int = 5;
// $float = 5.1;
// $str = 'string'; // a sequence of characters enclosed in quotes
// $bool = true;
// $null = null;

// // Type Casting
// $strInt = (string)$int; // => "5"
// $floatInt = (float)$int; // => 5.0
// $boolStr = (bool)$str; // => true
// $boolNull = (bool)$null; // => false

// if ($boolNull) {
//   echo 'true';
// } else {
//   echo 'false';
// }

// Basic Operators

// +
// -
// /
// *
// 26 % 5 === 1
// ** (PHP 5.6+)

// +=
// *=
// %=
// **= (TIAS)

// ++ increment
// -- decrement

// 5++ // => 6
// 4++ // => 5
// 2315125++ // => 2315126

// ++5 // => 6


// $num = 5;
// echo $num++ . " " . ++$num;
// echo '<br>';
// // echo $num;
// // echo '<br>';
// echo $num++;
// echo '<br>';
// echo $num++;
// echo '<br>';
// echo ++$num;
// echo '<br>';
// echo $num++;
// echo '<br>';
// echo $num++;
// echo '<br>';
// echo $num++;

// $num = 5;
// $num--;

// THESE ARE INVALID
// $num**
// $num//
// $num%%

// Basic Logic
$stuff = 'that';

// // strict comparison (equality operator)
// if ($stuff === 'that') {
//   // then do this
// } else {
//   // do that
// }

// // loose comparison (case-sensitive)
// if ('THAT' == 'that') {
//   echo 'is equal';
// } else {
//   echo 'not equal';
// }

// // loose not-equal
// if ($stuff != 'that') {
//   // true that it was NOT equal
//   echo 'not equal';
// } else {
//   // false that it was NOT equal (i.e. they were equal)
//   echo 'is equal';
// }

// strict not-equal
if ($stuff !== 'that') {
  // do this
} else {
  // do that
}

$num = 2;
// greater-than comparison
if ($num > 5) {
  // is greater
  echo 'greater';
} else {
  // is NOT greater
  echo 'not greater';
}

// less-than comparison
if ($num < 5) {
  echo 'less';
} else {
  echo 'NOT less';
}

// greater-or-equal
if ($num >= 17) {
  echo 'greater or equal'
} else {
  echo 'NOT greater or equal'
}

// less-or-equal
if ($num <= 5) {
  echo 'greater or equal'
} else {
  echo 'NOT greater or equal'
}

// logical AND (&&) and OR (||)

// if condition 1 AND condition 2 are BOTH true
if ($stuff === 'that' && $num > 1) {
  // code...
  echo 'they all are true';
} else {
  echo 'at least one was false';
}

// if condition 1 OR condition 2 are TRUE
if (false || false) {
  echo 'true';
} else {
  echo 'false';
}


// Compound statements using logical AND/OR

// false
if (false || true && false) {
  echo 'true';
} else {
  echo 'false';
}

// false
if (true && false || false) {
  echo 'true';
} else {
  echo 'false';
}

// false
if (false && true && false) {
  echo 'true';
} else {
  echo 'false';
}

// true
if (false || true || false) {
  echo 'true';
} else {
  echo 'false';
}
