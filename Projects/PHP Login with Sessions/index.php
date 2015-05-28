<?php

/**
 * Recursive Form
 */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    die('Recursive Submission');

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index.php" method="POST">

        <div>
            <label>Username:</label>
            <input type="text" name="username" value="">
            <span class="error">Error Message Here</span>            
        </div>

        <div>
            <label>Password:</label>
            <input type="password" name="password" value="">
            <span class="error">Error Message Here</span>            
        </div>

        <button>Login</button>

    </form>
</body>
</html>
