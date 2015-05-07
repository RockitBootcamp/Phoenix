

<!DOCTYPE html>
<html>
<head>
    <title>New User</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <h1>

    <?php 
include 'initialize.php';

$db = new DB;

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //is this an email address
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * from People WHERE email = '{$email}'";
    $results = $db->execute($sql);
    $results_ok = $results->num_rows;
    $results = $results ->fetch_assoc();
    if ($results_ok == 0){
        $error_string = "Please create an account. Your email was not found or you type poorly. Do better.";
    } else {
        if ($results['email']== $email){
            if (password_verify($_POST['password'], $results['password'])){
                $_SESSION['user_id'] = $results['person_id'];
                $_SESSION['email'] = $results['email'];
                header("Location: account.php?user_id={$_SESSION['user_id']}");
                exit();
            } else {
                $error_string = 'Sorry, bad password. Stop sucking.';
            }
        } 

    }
}

print_r($error_string);
?></h1>


</body>
</html>