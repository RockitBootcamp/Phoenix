<?php

$a = "2";

if ($a == 2) {
  // here
  echo "1";
} else {
  echo "not 1";
}

$a = "2";

if ($a === 2) {
  echo "1";
} else {
  // here
  echo "not 1";
}

$a = 2;

if ($a <= 2) {
  echo "true";
} else {
  echo "false";
}


$a = 2;

// !=  ==
// !== ===
if ($a !== 4) {
  echo "true";
} else {
  echo "false";
}

$a = 2;

if ($a <> 4) {
  echo "true";
} else {
  echo "false";
}


$a = 2;

if ($a <= 4 && $a == 2) {
  echo "true";
} else {
  echo "false";
}


$a = 3;

if ($a <= 4 || $a == 2) {
  echo "true";
} else {
  echo "false";
}



$a = 1;

// if (true && false || false) {
if ($a == 2 || $a <= 4 && $a == 3) {
  echo "true";
} else {
  echo "false";
}

$a = 1;

// if (true && false || false) {
if ($a == 2 || ($a <= 4 && $a == 3)) {
  echo "true";
} else {
  echo "false";
}

$a = 3;

if ($a < 4) {
  echo "less than 4";

  if ($a !== 2) {
    echo "also not equal to 2";
  }
} else {
  echo "greater than 4";
}


// if it's the weekend and you're rich, echo "PARTY!!!"
// if it's the weekend and you're poor, echo "sadface"
// if it's not the weekend, echo "Is it Friday yet?"


// $weekend = true;
// $rich = false;

// if ($weekend) {
//   if ($rich) {

//   } else {

//   }
// } else {

// }

//if Sun is up && kid is 5 or greater - take to school
//if Sun is up && kid is less than 5 - take to day care
//if Sun is not up, put them to bed

$sun = true;
$age = 7;

