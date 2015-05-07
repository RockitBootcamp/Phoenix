<?php 
	error_reporting(E_ALL);
  ini_set('display_errors', 'on');
  require 'dbconnect.php';
  $error_array = array();
  $error_string = "";
  $reg = '/^[a-zA-Z-_.+]+@[a-zA-Z-_.+]+\.[a-z]{2,6}\.?[a-z]+/';
  $email = "";
  $loggedIn = false;

//on loads other than the first
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //is this an email address
  if (preg_match($reg, $_POST['email']) === 1){
    $email = $_POST['email'];
    $result = $mysqli->query("SELECT * FROM user WHERE email = '$email' LIMIT 1");
    $result = $result->fetch_assoc();

    //match email and then password
    if ($result['email'] == $_POST['email']){
      if ($result['password'] == $_POST['password']){
        // loggedIn()
        array_push($error_array, "Congratulations you are logged in as $email");
        $loggedIn = true; // says found in DB by email & entered correct pswd.
      }else {
        // badPw();
        array_push($error_array, "Sorry your password is incorrect");
      }
    } else {
        array_push($error_array, "Please click signup button");
    }
  }
} 

if(count($error_array) > 0) {
  foreach($error_array as $e) {
    $error_string = $error_string . $e . "<br>"; 
  } 
}

?>