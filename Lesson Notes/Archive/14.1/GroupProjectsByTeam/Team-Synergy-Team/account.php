<!-- put in company field you lazy bastards and make horizontal -->
<?php

// error_reporting(E_ALL);
// ini_set('display_errors', 'on');

include 'initialize.php';
// include 'top5.php';

if (!is_numeric($_SESSION['user_id'])) {
    die('You need to log in');
} 

// echo 'You\'re logged in ' . $_SESSION['email'];
// $best = getTopFive($_SESSION['user_id']);

// $db = new DB();
    
    $user_id = $_GET['user_id'];

    $sql = "
            SELECT *
            FROM Reviews
            WHERE person_id = $user_id";

    $results = db::execute($sql);
    // $results = $db->execute($sql);

    $reviews = [];

    while ($row = $results->fetch_assoc()) {
        // array_push($reviews, $row);
        $reviews[$row['review_id']]=$row;
        // print_r($reviews); 
    };



    // $reviews = $_GET['user_id'];

?>

<!doctype html>
<html lang="en">
<head>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="main.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="table.css">
   
</head>
<body>

    <main>
        <?php include 'header.php';?>
    </main>
    <section>
        <h1>My Reviews as a Former Employee</h1>
       
                 <?php foreach($reviews as $i => $value) {
                    $sql_comp = "
                        SELECT *
                        FROM Companies
                        WHERE company_id = {$reviews[$i]['company_id']}";

                    $output = db::execute($sql_comp);
                    // $output = $db->execute($sql_comp);

                    $company_info = $output->fetch_assoc();

                    echo "<table>
                            <thead>
                                <tr>
                                  <th><div style='width: 275px'>Qualities at {$company_info['Name']}</div></th>
                                  <th><div style='width: 50px'>Scores</div></th>
                                </tr>
                              </thead>
                            <tbody>
                                <tr>
                                    <td>Work/Life Balance</td>
                                    <td>{$reviews[$i]['WLBalance']}</td>
                                </tr>    
                                    <td>Salary</td>
                                    <td>{$reviews[$i]['Salary']}</td> 
                                </tr>
                                    <td>Benefits</td>
                                    <td>{$reviews[$i]['Benefits']}</td>
                                </tr>
                                    <td>Advancement Opportunities</td>
                                    <td>{$reviews[$i]['Opportunity']}</td> 
                                </tr>
                                    <td>Equality/Fairness</td>
                                    <td>{$reviews[$i]['Fairness']}</td> 
                                </tr>
                                    <td>Leadership</td>
                                    <td>{$reviews[$i]['Leadership']}</td> 
                                </tr>
                                    <td>Loyalty</td>
                                    <td>{$reviews[$i]['Loyalty']}</td>
                                </tr>
                                    <td>Morale</td>
                                    <td>{$reviews[$i]['Morale']}</td> 
                                </tr>
                                    <td>Communication</td>
                                    <td>{$reviews[$i]['Communication']}</td>
                                </tr> 
                            </tbody>   
                    </table>";
                };?>
    </section>

    <!-- <?php echo 'You\'re logged in ' . $_SESSION['email']; ?> -->

</body>
</html>
                            
                                
                               
                                    
                                    
                                     
                                    
                                    
                                    
                                     
                                    
                                     
                            
