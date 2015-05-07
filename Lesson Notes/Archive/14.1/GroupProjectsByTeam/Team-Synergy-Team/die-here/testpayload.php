<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

include_once 'db.php';
include 'payload.php';

$db = new DB;
$search = $_GET['search'];


if ($search===''){
    $sql = "SELECT * FROM Companies";
} else {
    $sql = "SELECT * FROM Companies WHERE Name LIKE '%$search%'";

}

$results = $db->execute($sql);

Payload::$values = [];

while($row = $results->fetch_assoc()){
    $a = [];
    $a['Name'] = $row['Name'];
    $a['Industry'] = $row['Industry'];
    $a['Website'] = $row['Website'];
    $a['Logo'] = $row['Logo'];
    $a['Id'] = $row['company_id'];
    array_push(Payload::$values, $a);
 }   
    
    $payload = json_encode(Payload::$values);

    
?>

<!DOCTYPE html>
<html>
<head>
    <title>Company List</title>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0-alpha.2/handlebars.min.js"></script>
    <script> var payload = <?php echo "$payload";?></script>
    <script src="render.js"></script>
    <link rel="stylesheet" type="text/css" href="company.css">
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <link rel="stylesheet" type="text/css" href="companies.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php';?>
     <form action="testpayload.php" method="GET">
        <input type="text" name="search" placeholder="Find a company rating" size="75"><br>
        <button type="submit">Submit</button>
    </form>
   
    <div class="companies">
        <ul class="listing"></ul>
    </div>

    <script id="company-media-object" type="text/x-handlebars-template">
        {{#each this}}
                <li class="{{Id}}">
                  <div class="outer">
                    <a href="template.php?company_id={{Id}}"><img src="{{Logo}}"></a>
                    <div class="content">
                      <h4>{{Name}}</h4>
                      <p>{{Industry}}</p>
                      <a href="{{Website}}">{{Name}}'s website</a>
                    </div>
                  </div>
                </li>
        {{/each}}
    </script>
</body>
</html>