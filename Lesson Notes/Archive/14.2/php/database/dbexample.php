<?php


$mysqli = new mysqli("localhost", "root", "", "restaurant");

if($mysqli->connect_errno){
    echo "Error";
}
else {
    
    $sql = "Select * from menuItem;";
    $results = $mysqli->query($sql);


    if ($results !== FALSE) {

        echo "<table>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Price</td>
            </tr>";



        while ($row = $results->fetch_assoc()) {
            echo "<tr><td>" . $row['id'] . "</td><td>" . $row['name'] . "</td><td>" . $row['price'] . "</td></tr>";
        }

        echo "</table>";
        
    }
    else {
        echo "Bad" . $mysqli->error;
    }
}