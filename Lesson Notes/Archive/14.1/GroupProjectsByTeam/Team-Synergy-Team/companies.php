<?php 
include 'initialize.php';
include 'payload.php';
include 'newaverages.php';
//$db = new DB;
$search = (isset($_GET['search']) ? addslashes($_GET['search']) : null);


if ($search===''){
    $sql = "SELECT * FROM Companies";
} else {
    $sql = "SELECT * FROM Companies WHERE Name LIKE '%$search%' ";

}

//$results = $db->execute($sql);
$results = db::execute($sql);

Payload::$values = [];

while($row = $results->fetch_assoc()){
  
    $avg = getAverages($row['company_id']);
    $a = [];
    $a['Name'] = $row['Name'];
    $a['Industry'] = $row['Industry'];
    $a['Website'] = $row['Website'];
    $a['Logo'] = $row['Logo'];
    $a['Id'] = $row['company_id'];
    $a['Average'] = $avg['Average'];
    // print_r($a);
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
    <link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
    <script src="render.js"></script>
    <link rel="stylesheet" type="text/css" href="company.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php';?>
     <form action="companies.php" method="GET">
        <input type="text" name="search" placeholder="Find a company rating" size="75">
        <button type="submit">Submit</button>
    </form>
   
    <div class="companies">
        <ul class="listing"></ul>
    </div>

    <script id="company-media-object" type="text/x-handlebars-template">
        {{#each this}}
                <li class="{{Id}}">
                  <div class="outer">
                    <a href="companydetail.php?company_id={{Id}}"><img src="{{Logo}}"></a>
                    <div class="content">
                      <h4>{{Name}}: Average Rating: {{Average}}</h4>
                      <p>{{Industry}}</p>
                      <a href="{{Website}}">{{Name}}'s website</a>
                    </div>
                  </div>
                </li>
        {{/each}}
    </script>
</body>
</html>