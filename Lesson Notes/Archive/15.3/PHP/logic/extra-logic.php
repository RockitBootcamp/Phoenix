<?php

$weather == 'warm';
$casualWorkEnv

if ($weather == 'warm' && $casualWorkEnv) {
    echo 'wear shorts';
}

if ($hasBreakfastFood) {
    echo 'eat breakfast';
} else {

    if ($hasTime) {

    } else if ($trafficBad) {
 
    } else {

    }

}






if ($age < 5) {
    // too young
} else if ($age < 18) {
    // school
} else if ($age < 65) {
    // work
} else {
    // retired
}


if ($age < 5) {
    // too young
} else {

    // old enough to feed yourself

    if ($age < 18) {
        // school
    } else if ($age < 65) {
        // work
    } else {
        // retired
    }

}



$foo = true;
$bar = false;

if ($foo) {
    if ($bar) {
        // a
    }
} else {
    // b
}

// neither a or b



// ---- Page that can only be accessed if logged in



if (!$logged) {
    header('Location: /loginpage.php');
    die();
} 

// The fact that we are in this area means were logged in






$x = 5;
$y = null;

if ($x < 10) $y = 6;

echo $y;





// The obnoxious way 

if ($theTerminatorLives) {
    $a = 'foo'
} else {
    $a = 'bar';
}

if ($whatver) {
    $b = 'foo'
} else {
    $b = 'bar';
}

// The ternary operator way

$a = $theTerminatorLives ? 'foo' : 'bar';
$b = $whatever ? 'foo' : 'bar';

