<?php 
  


  include("initialize.php");
  
  $db = new DB;


  $sql = "SELECT * from 'people' WHERE 'email' = $_POST['email'];"
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
    
    $result = $db->execute($sql);
    $result = $result->fetch_assoc();

    //match email and then password
    if ($result['email'] == $_POST['email']){
      if ($result['password'] == $_POST['password']){
        // loggedIn()
        //array_push($error_array, "Congratulations you are logged in as $email");
        //$loggedIn = true; // says found in DB by email & entered correct pswd.

        $_SESSION['user_id'] = 87923;
        header('Location: account.php');
        exit();


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

<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<?php include 'header.php';?>
</html>
