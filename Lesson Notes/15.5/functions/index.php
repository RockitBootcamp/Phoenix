<?php


function moveForward() {

    echo("Move forward");
}

function turn($direction){
    echo("You shall turn " . $direction);
}

function add($zuba, $zaba){
    return $zuba + $zaba;
}

function divide($a, $b){
    return $a / $b;
}

function getBigNumber(){
    return 5;
}


moveForward();
moveForward();
turn("Right");
moveForward();

$ans = add(3,4);

// challenge
// Create a function that returns a / b 

echo($ans);

$ans = divide(8,2);
echo($ans);


$ans = add(3,getBigNumber());
echo($ans);


echo(strlen("Brig"));

if(is_numeric("1942")){
    echo "Yep";
}
else {
    echo "Nope";   
}

echo(ucfirst("so much depends upon the red wheel barrow"));

echo(substr("This is rad", 0, 2));

echo(str_replace( ["e", "o", "l"], ["3", "0", "!"], "Can I buy a vowel for five dollars please"));



echo(htmlentities("Brig is <b>really</b> boring"));