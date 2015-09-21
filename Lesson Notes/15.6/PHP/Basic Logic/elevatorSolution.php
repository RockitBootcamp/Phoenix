<?php

$personDir = 'up';
$personFloor = 5;
$elevatorDir = 'up';
$elevatorFloor = 7;


/**
 * Solution One
 */

if ($personDir == $elevatorDir) {

    if ($personFloor >= $elevatorFloor && $personDir == 'up') {
        echo 'pick up';
    } else if ($personFloor <= $elevatorFloor && $personDir === 'down') {
        echo 'pick up';
    } else {
        echo 'dont pickup';
    }

} else {
    echo 'dont pick up'
}


/**
 * Solution Two
 */

// Person is higher
if ($personFloor > $elevatorFloor) {

    if ($elevatorDir == 'up' && $personDir == 'up') {
        echo 'pick me up!';
    } else {
        echo 'dont pick up';
    }

// Elevator is higher
} else {

    if ($elevatorDir == 'down' && $personDir == 'down') {
        echo 'Pick me up';
    } else {
        echo 'dont pick up';
    }

}