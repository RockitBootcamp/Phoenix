<!-- put in the images you lazy bastards -->
<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 'on');

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

<h1><?php echo $company_info['Name']; ?> <button onclick="window.location.href='survey.php'">Rate!</button></h1>
	
<div class="company-detail">        
	<div class="inner">

        <div class="logo">
        <h3><?php echo $company_info['Industry']; ?></h3>
        <img src="<?php echo $company_info['Logo']; ?>">
        </div>

        <p><?php echo $company_info['Description']; ?></p>

        <div class="hyperlink">
      </div> 
    </div>




    <div class="ratings">
        <h3>Overall Company Rating</h3>

        <ul class="rating1">
            <li>Work/Life Balance: <?php echo $averages['WLBalance']; ?></li>
            <li>Salary: <?php echo $averages['Salary']; ?></li>
            <li>Benefits: <?php echo $averages['Benefits']; ?></li>
        </ul>

        <ul class="rating2">
            <li>Opportunity for Advancement: <?php echo $averages['Opportunity']; ?></li>
            <li>Equality/Fairness: <?php echo $averages['Fairness']; ?></li>
            <li>Leadership: <?php echo $averages['Leadership']; ?></li>
        </ul>

        <ul class="rating3">
            <li>Loyalty: <?php echo $averages['Loyalty']; ?></li>
            <li>Morale: <?php echo $averages['Morale']; ?></li>
            <li>Communication: <?php echo $averages['Communication']; ?></li>
        </ul>

    </div>

</div>

<div class="reviews">
    <h3>What Users Have to Say About <?php echo $company_info['Name']; ?></h3>
</div>

</body>
</html>