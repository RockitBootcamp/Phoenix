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
    <h1>Please log in to continue</h1>
    <div class="login">
      <form action = "verify.php" method = "POST">  
          <input type = "text" name = "email" placeholder="Email Address"><br>
          <input type = "password" name = "password" placeholder="Password"><br>
          <button type = "submit">Submit</button>
      </form> 
    </div> <br><br>
    <h3>New user? <button onclick="window.location.href='signup.php'">Sign up!</button></h3>
  

     <!-- <p class = "error"> <?php echo $error_string ?> </p> -->

  </body>
  </html>