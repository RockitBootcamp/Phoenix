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

  <link rel="stylesheet" href="template.css"> 
  <link rel="stylesheet" href="style.css">
 
</head>

<body>

<?php include 'header.php';?>

<?php echo $company_info['Name']; ?>
	

<main>
    <aside> 
    	<div class="media">
            
        	<div class="inner">
                <img src="<?php echo $company_info['Logo']; ?>">
                <h1><?php echo $company_info['Industry']; ?></h1>
                <p class="paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

It is a long established fact that a reader will be distracted by the readable content of a page 

 
                </p>
                <p></p> 
                <div class="hyperlink">
                <a href="<?php echo $company_info['Website']; ?>" class=""><?php echo $company_info['Website']; ?></a>
                </div> 
            </div>
        </div>
    </aside>
</main>

<section>


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
</section>







</body>
</html>