<?php
// Initial commit GA
// Include Database Class
include('db.php');
?>
<!--
// this function expects a string containing the table name to retrieve
// right now the database host, user, and database name are hardcoded.
/*
So, replace this in here: $connection = new DB("localhost", "root", "","monster");
with this... Amazon server info=

host: rockit.ccyd2ljjwzet.us-east-1.rds.amazonaws.com

username: monster

password: rockit

db name: monster
*/ -->
<div class="inactive">
<?php 
function getPhpArrayFromTable($table) {
     // echo "string"; "<br>Retrieve table: " . $table ."<br>";
     $connection = new DB("localhost", "root", "","monster");
     $results = $connection->execute("SELECT * FROM " . $table);

     $newArray = array();

     while ($row = $results->fetch_assoc()) {
          array_push($newArray, $row);
     }

     return $newArray; //returns a php array. Each row is an assoc array.

}
?>
</div>
<!--
// this function expects getPhpArrayFromTable's array, as a parameter & returns
// a JSON encoded array. This function should be called from a 
// php code block embedded in your javascript code block.
// See below <script> inside the html.
-->
<?php
function getJsonArray($phpArray) {

     return json_encode($phpArray);
}

// now dump all the tables into php arrays 
// down in the html we will have javascript that does the 
// last step of conversion to JSON
$weapons = getPhpArrayFromTable("weapons");
//print_r($weapons);
$character = getPhpArrayFromTable("`character`");
$character_type = getPhpArrayFromTable("character_type");
$monster = getPhpArrayFromTable("monster");
$player = getPhpArrayFromTable("player");
$weapon_type = getPhpArrayFromTable("weapon_type");


?>

<!doctype html>
   <html lang="en">
   <head>
        <meta charset="UTF-8">
        <title>json_encode</title>
   </head>
   <body>
     <script type="text/javascript">
          // this method for embedding PHP in javascript is shown
          // in Brad's example on GitHub: PHP-Variables-to-JS on 06/05/14
          //Example output from debugger:
          // var character_type = [{"char_type_id":"1","type":"0"},{"char_type_id":"2","type":"1"}];
          var weapons = <?php echo  getJsonArray($weapons); ?>;
          //for (var row in weapons) {
          //     console.log(weapons[row]);
          //}
          var character = <?php echo getJsonArray($character); ?>;
          var character_type = <?php echo  getJsonArray($character_type); ?>;
          var monster = <?php echo getJsonArray($monster); ?>;
          var player = <?php echo getJsonArray($player); ?>;
          var weapon_type = <?php echo getJsonArray($weapon_type); ?>;

     </script>


        
   </body>
   </html>   
