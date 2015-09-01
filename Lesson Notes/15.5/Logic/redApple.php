<?php



$objectColor = "red";  // Red, Blue, Yellow, Orange
$objectHasJuice = true; // true, false


echo "<h1>Red Apple</h1>";

function isApple($objectName){

    if($objectName == "apple"){
        return true;
    } else {
        return false;
    }
}

function isJuicy($objectHasJuice) {
    if($objectHasJuice) {
        return true;
    }else {
        return false;
    }
}

function isRed($objectColor) {
    if($objectColor == "red") {
        return true;
    } else {
        return false;
    }
}

function isValidInput(){

    if(isset($_GET["name"])){

        $userItem = $_GET["name"];
        if(isValidTerm($userItem)){
            return true;
        } else {
            return false;
        }

    } else {
        return false;
    }
}

function isValidTerm($userItem){

    $validObject = ["apple", "hammer", "car", "banana"];

    foreach($validObject as $x){

        if($x == $userItem){
            return true;

        } else {
           // continue     
        }
    }

    return false;

}

if(isValidInput()){

    $objectName = $_GET["name"];
    if(isApple($objectName)){

        if(isJuicy($objectHasJuice)){

            if(isRed($objectColor)){

                echo "Buy!, this IS a red, juicy, apple";

            } else {
                echo "Don't buy, this is not a red, juicy, apple";
            }
        } else {
            echo "Don't buy, this is not a red, juicy, apple";
        }
    } else {
        echo "Don't buy, this is not a red, juicy, apple";
    }
} else {
    echo "Invalid input";
}