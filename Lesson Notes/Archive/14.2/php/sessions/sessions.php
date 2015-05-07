<?php 

session_start();

phpinfo();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($_POST['user'] == 'daniel' && $_POST['password'] == 'password') {
        $_SESSION['username'] = $_POST['user'];
        $_SESSION['isloggedin'] = 'true';
        header('Location: /myprofile.php');
        exit();
    }
}


print_r($_SESSION);



 ?>

 <html>
     <form method="POST">
        <input type="text" name="user"><br>
        <input type="text" name="password"><br>
        <input type="submit" value="Login">
     </form>
 </html>