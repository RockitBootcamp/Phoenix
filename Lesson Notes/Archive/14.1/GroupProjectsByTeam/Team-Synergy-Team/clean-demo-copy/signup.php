
<?php

    // error_reporting(E_ALL);
    // ini_set('display_errors', 'on');

    include 'initialize.php';
    $db = new DB();
    $emailreg = '/^[a-zA-Z-_.+]+@[a-zA-Z-_.+]+\.[a-z]{2,6}\.?[a-z]+/';
    $passreg = '/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W]).{8,64})/';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // //Check email against REGEX
        // if (preg_match($emailreg, $_POST['email']) === 1)
        // //Check that email is unique
        // if 
        // //Check that passwords match
        if ($_POST['password'] == $_POST['verifypassword']){
        // //Check password has 8chars and at least 1 number and one symbol
        // if (preg_match($passreg, $_POST['password']) === 1)
        // //Drop second password field
            
            unset($_POST['verifypassword']);


            $sql_values = $_POST;
            $sql_values['password'] = password_hash($sql_values['password'], PASSWORD_DEFAULT);
            // print_r($sql_values);
            $table = "People"; 
            $db->insert($table, $sql_values);
        }
    };
?>

<!DOCTYPE html>
<html>
<head>
    <title>New User</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <?php include 'header.php';?>

    <h1>Sign Up for Inside Job</h1>

    <form action="signup.php" method="POST">
        <fieldset> 
            <input type="text" class="signup-box" placeholder="First Name" name="first_name"><br>
            <input type="text" class="signup-box" placeholder="Last Name" name="last_name"><br>
            <input type="email" class="signup-box" placeholder="Email Address" name="email"><br>
            <input type="password" class="signup-box" placeholder="Password" name="password"><br>
            <input type="password" class="signup-box" placeholder="Verify Password" name="verifypassword"><br><br>
            <button type="submit">Submit</button>
            <button class="cancel">Cancel</button>
        </fieldset>
    </form>
</body>
</html>







