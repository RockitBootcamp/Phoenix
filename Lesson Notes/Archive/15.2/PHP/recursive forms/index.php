<?php


if (isset($_GET['email'])) {
    
    $regex = '/^[a-z]+@[a-z]+\.[a-z]{2,}$/';
    $regex = '/@/';

    if (preg_match($regex,$_GET['email'])) {
        header('Location: account.php');
        exit();
    }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <form>
        <input type="email" name="email">
        <button>Login</button>
    </form>

</body>
</html>