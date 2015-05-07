<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');
    
?>
<?php
    $error_array = array();
    $error_string = "";
    $first_name = "";
    $last_name = "";
    $username = "";
    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(strlen($_POST['first_name']) > 0) {
            $first_name = $_POST['first_name'];

        } else {
            $first_name = $_POST[''];
        }

        if(strlen($_POST['last_name']) > 0 ) {
            $last_name = $_POST['last_name'];

        } else {
            $last_name = $_POST[''];
        }

        if ($_POST['username'] ==''){
            array_push($error_array, 'Use your email address as your Username');
        } else {

            $pos = strpos($_POST['username'], '@');
            if($pos === false) {
                array_push($error_array, 'Use your email address for an Username and the Email address must contain \'@\'');

            } else {
                $username = $_POST['username'];
            }
        }

        $error = "";
        if(count($error_array) > 0) {
            foreach($error_array as $e) {
                $error_string = $error_string . $e . "<br>"; 
            }
        } else {
            header("Location: start_game.html");
            exit;
        }
    }
        
?>


<html lang="en">
<head>
    
    <title>User Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main>
        <div>
            <fieldset>
            <legend>User Login</legend>
            <div class="error"><?php print_r($error_string); ?></div>
            <p>Creating an User account will allow you to save your game and record a high score. 

            <form action="verify.php" method="post">
            First Name:<br>
            <input type="text" name="first_name" placeholder="Optional" value="<?php echo $first_name ?>"><br><br>
            Last Name:<br>
            <input type="text" name="last_name" placeholder="Optional" value="<?php echo $last_name ?>"><br><br>
            Username:<br>
            <input type="email" name="username" placeholder="Email address as Username" value="<?php echo $username ?>"><br><br>
            Password:<br>
            <input type="password" name="password"><br><br>
            <input type="submit" name="submit" value="Login">
            </form>
                


            </fieldset>



        </div>
    </main>    
</body>
</html>
