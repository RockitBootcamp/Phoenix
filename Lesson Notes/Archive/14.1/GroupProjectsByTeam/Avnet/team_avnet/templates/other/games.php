<?php 
//namespace RockIT\TechGames;

error_reporting(E_ALL);
ini_set('display_errors', 'on');

//use RockIT\TechGames;
$title = "Games";
?>

<?php ob_start() ?>

 <?php 
	//include 'resources/database/db.php';

	$db = new DB();

	$query = "SELECT * FROM game";
	$result = $db->execute($query);
?>

<?php
	while ($row = mysqli_fetch_array($result)) {
		echo "<h1><a href='gameHome?t=gameHome&gameId={$row['game_id']}'>" . $row['title'] . "</a></h1><h4>Description</h4><p>" . 
			$row['description'] . "</p><h4>Skills Required</h4><p>" . 
			$row['skill_requirements'] . "</p>";
	 }
?>
    
<?php $content = ob_get_clean() ?>

<?php include TEMPLATES_PATH . '/layout.php' ?>