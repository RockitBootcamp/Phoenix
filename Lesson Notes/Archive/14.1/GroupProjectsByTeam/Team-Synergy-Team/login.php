<?php 
include 'initialize.php';

if ($_SESSION['user_id']){
  header("Location: account.php?user_id={$_SESSION['user_id']}");
}
 ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>Sign in Form</title>
  </head>
  <body>
    <?php include 'header.php';?>
    <h3>Please log in to continue</h3>
    <form action = "verify.php" method = "POST">  <br>
        Email <input type = "text" name = "email"><br><br>
        Password <input type = "password" name = "password"><br><br>
        <button type = "submit">Submit</button>
    </form>
<br><br>
    <h3>New user? <button onclick="window.location.href='signup.php'">Sign up!</button></h3>
  

     <!-- <p class = "error"> <?php echo $error_string ?> </p> -->

  </body>
  </html>