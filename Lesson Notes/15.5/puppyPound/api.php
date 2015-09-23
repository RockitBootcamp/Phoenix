<?php

session_start();

if(isset($_SESSION["puppies"])){
    
    $puppies = $_SESSION["puppies"];
    $puppyName = $_POST["puppyName"];

    for($i=0; $i<count($puppies);$i++){
        
        if($puppies[$i] == $puppyName){
            array_splice($puppies, $i, 1);
           
        } 
    }

    $_SESSION["puppies"] = $puppies;
    
}