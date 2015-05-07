
<?php

    // error_reporting(E_ALL);
    // ini_set('display_errors', 'on');

    include 'initialize.php';

    $emailreg = '/^[a-zA-Z-_.+]+@[a-zA-Z-_.+]+\.[a-z]{2,6}\.?[a-z]+/';
    $passreg = '/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W]).{8,64})/';
    $errorarray = [];
    $errorstring = "";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sql = "SELECT * FROM People WHERE email = '{$_POST['email']}'";
        $result = db::execute($sql);
        // Check email against REGEX
        if (preg_match($emailreg, $_POST['email']) === 1){

            // Check that email is unique
            if ($result->num_rows == 0){

                //Check that passwords match
                if ($_POST['password'] == $_POST['verifypassword']){
                    // print_r($_POST);
                    //Check password has 8chars and at least 1 number and one symbol
                    if (preg_match($passreg, $_POST['password']) == 1){
                        //Drop second password field
                        unset($_POST['verifypassword']);
                        $sql_values = $_POST;
                        $sql_values['password'] = password_hash($sql_values['password'], PASSWORD_DEFAULT);
                        $table = "People"; 
                        // db::insert($table, $sql_values);
                    
                    }else{
                        $errorstring = "Your password must be at least 8 characters with at least one number and one symbol";
                        array_push($errorarray, $errorstring);
                    }
               
                }else{
                    $errorstring = "Your passwords do not match";
                    array_push($errorarray, $errorstring);
                }
            
            }else{
                $errorstring = "Your email is already associated with an account";
                array_push($errorarray, $errorstring);
            }
        
        }else{
            $errorstring = "Please enter a valid email";
            array_push($errorarray, $errorstring);
        }
    }
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
            <p>
               <?php foreach ($errorarray as $key) {
                    echo "<br>" . $key . "<br>";
                    // echo "Hi";
            };?>
            </p>
        </fieldset>
    </form>
</body>
</html>







