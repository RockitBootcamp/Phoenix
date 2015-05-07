<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

include 'db.php';
include 'payload.php';

$search = $_GET['search'];

$db = new DB;
$sql = "SELECT * FROM Companies WHERE Name LIKE '%$search%'";
$results = $db->execute($sql);

Payload::$values = [];
while($row = $results->fetch_assoc()){
    $a = [];
    $a['Name'] = $row['Name'];
    $a['Industry'] = $row['Industry'];
    $a['Website'] = $row['Website'];
    
    array_push(Payload::$values, $a);
}


    $payload = json_encode(Payload::$values);
    print_r(Payload::$values);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" name="search" placeholder="Find a company rating" size="75"><br>
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>


<?php










?>