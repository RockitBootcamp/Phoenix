<?php


$hungry = $_GET['hungry'];
$lazy = $_GET['lazy'];


if ($hungry) {

    if ($lazy) {
        echo 'eat cereal';
    } else {
        echo 'eat eggs and bacon';
    }
    
} else {

    echo 'eat nothing';

}