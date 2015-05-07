<?php 
include 'db.php';
    $db = new DB;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $sql_values = $_POST;
    $sql_values['password'] = $password;
    print_r($_POST['password']);
    print_r($sql_values);
    print_r(array_keys($sql_values));


    $db->insert('People', $sql_values);
}

 ?>

 <!DOCTYPE html>
<html>
<head>
    <title>New User</title>
</head>


<body>

    <form action="passwordtest.php" method="POST">
        <fieldset> 
            <input type="text" placeholder="First" name="first_name">First Name<p></p>
            <input type="text" placeholder="Last" name="last_name">Last Name<p></p>
            <input type="email" placeholder="Email" name="email">Email<p></p>
            <input type="password" placeholder="Password" name="password">Password<p></p>
            <!-- <input type="password" placeholder="Verify Password" name="verifypassword">Password<p></p> -->
            <button type="submit">Submit</button>
            <!-- <button class="cancel">Cancel</button> -->
        </fieldset>
    </form>
</body>
</html>