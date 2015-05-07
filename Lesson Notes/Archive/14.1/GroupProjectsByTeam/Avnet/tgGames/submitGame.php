<?php 
error_reporting(E_ALL);
ini_set('display_errors', 'on');

    $game_name = "";
    $game_description = "";
    $equipment = "";
    $schedule = "";

    $error_array = array();
    $error_string = "";


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (  strlen($_POST['game_name']) < 3) {
            array_push($error_array, 'More Descriptive Name Please');
        } else {
            $game_name = $_POST['game_name'];
        }

        if ($_POST['game_description'] == '' ) {
            array_push($error_array, 'Enter a Description');
        } else {
            $game_description = $_POST['game_description'];
        }

        if ($_POST['equipment'] == '' ) {
            array_push($error_array, 'Please enter the necessary equipment');
        } else {
            $game_description = $_POST['game_description'];
        }

        if (is_numeric($_POST['schedule'])==false) {
            array_push($error_array, 'Please specify a time-slot');
            $schedule = '';
        } else {
            $schedule = $_POST['schedule'];
        }

        if(count($error_array) > 0) {
            foreach($error_array as $e) {
                $error_string = $error_string . $e . "<br>";
            }
        } else {
            header("Location: success.html");
            exit;
        }

    }

    var game_data_input = $_POST;
    echo game_data_input;

    //(json_decode(/*file name */));
    echo "THIS FORM IS WORKING";

?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  
</body>
</html>