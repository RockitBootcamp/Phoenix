<?php

// $a = 4;
// $b = 8;

// function add($x, $y) {
//     return $x + $y;
// }

// function message($message) {
//     echo 'Your message is' . $message;
// }

// // $sum = add($a, $b);
// // message($sum);

// //message(add($a, $b));


function getDressed() {
    return "Got my overalls  <br>";
}

function getBucket() {
    return "Got bucket <br>";
}

function getStool() {
    return "Got stool  <br>";
}

function eatBreakfast() {
    return "Have eaten  <br>";
}

function milkCow($cow_name) {
    return $cow_name . " be milked! <br>";
}

function milkCows($cow_names) {
    echo getReady();
    echo getBucket();
    echo getStool();
    foreach ($cow_names as $cow){
        echo milkCow($cow);
    }
}

function getReady() {
    echo getDressed();
    echo eatBreakfast();
}

function goToChurch() {
    getReady();
    echo "Amen, went to church <br>";
}



$cow_names = ['Bessie', 'Flossie', 'Sarah' ];

milkCows($cow_names);




// goToChurch();



function getName() {
    return 'Brad';
}

function welcomeMessage($name) {
    $logged = true;
    return 'Welcome, ' . $name . '. Have fun on our site';
}

// -----------------


$welcome = welcomeMessage(getName());

echo '<h4>' . $welcome . '</h4>'

















