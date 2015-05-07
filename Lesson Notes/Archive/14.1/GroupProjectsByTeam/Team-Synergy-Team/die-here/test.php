<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');
    include 'db.php';
    $db = new DB;
    $sql = "SELECT * FROM People WHERE email = 'cyril@isis.com'";
    $results = $db->execute($sql);
    $results = $results->fetch_assoc();
    // print_r($results);
    // echo "<br>";


$hash = $results['password'];
print_r($hash);
echo "<br>";
$input = 'Lana';
// print_r($input);
if (password_verify($input, $hash)){
    echo "pass";
}else {
    echo "fail";
}

 ?>