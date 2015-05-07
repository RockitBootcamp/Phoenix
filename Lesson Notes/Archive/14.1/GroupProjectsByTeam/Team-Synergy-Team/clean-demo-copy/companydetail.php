<!-- put in the images you lazy bastards -->
<?php

    // error_reporting(E_ALL);
    // ini_set('display_errors', 'on');

    include_once('db.php');
    include('newaverages.php');

    $db = new DB();
    $company_id = $_GET['company_id'];

    $sql = "
            SELECT *
            FROM Companies
            WHERE company_id = $company_id";

    $results = $db->execute($sql);

    $company_info = $results->fetch_assoc();

    $averages = getAverages($company_id);
    
?>



<!doctype html>
<html lang="en">
<head>

  <link rel="stylesheet" href="style.css">
 
</head>

<body>

<?php include 'header.php';?>

<div class="top-form">
<form action="companies.php" method="GET">
  <input type="text" name="search" class="top-box" placeholder="Find a company rating" size="80">
  <button type="submit">Submit</button>
</form>
</div>

<h1><?php echo $company_info['Name']; ?> <button class="rate" onclick="window.location.href='survey.php'">Rate!</button></h1>   
    
<div class="company-detail">        
    <div class="inner">

        
        <h3><?php echo $company_info['Industry']; ?></h3>
       
        <hr>

        <img src="<?php echo $company_info['Logo']; ?>">


        <p><?php echo $company_info['Description']; ?></p>

        <div class="hyperlink">
      </div> 
    </div>




    <div class="ratings">
        <h3>Overall Company Rating</h3>
        <hr>

        <table>
            <tr>
                <td>Work/Life Balance:</td> <td><?php echo $averages['WLBalance']; ?></td>
            </tr>

            <tr>
                <td>Salary:</td> <td><?php echo $averages['Salary']; ?></td>
            </tr>

            <tr>
                <td>Benefits:</td> <td><?php echo $averages['Benefits']; ?></td>
            </tr>

            <tr>
                <td>Opportunity for Advancement:</td> <td><?php echo $averages['Opportunity']; ?></td>
            </tr>

            <tr>
                <td>Equality/Fairness:</td> <td><?php echo $averages['Fairness']; ?></td>
            </tr>

            <tr>
                <td>Leadership:</td> <td><?php echo $averages['Leadership']; ?></td>
            </tr>

            <tr>
                <td>Loyalty:</td> <td><?php echo $averages['Loyalty']; ?></td>
            </tr>

            <tr>
                <td>Morale:</td> <td><?php echo $averages['Morale']; ?></td>
            </tr>

            <tr>
                <td>Communication:</td> <td><?php echo $averages['Communication']; ?></td>
            </tr>

        </table>


    </div>

</div>

<div class="reviews">
    <h3>What Users Have to Say About <?php echo $company_info['Name']; ?> 
        <button class="rate" onclick="window.location.href='survey.php'">Rate <?php echo $company_info['Name']; ?></button>
    </h3>

    <div>
    
    </div>
    
</div>

</body>
</html>