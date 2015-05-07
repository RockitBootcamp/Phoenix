<?php 
//namespace RockIT\TechGames;

error_reporting(E_ALL);
ini_set('display_errors', 'on');

//use RockIT\TechGames;
$title = "Create a Team";

    ob_start();
?>
<div class="team-container">
    <form action="//<?=APP_PATH?>/index.php/createTeam" method="POST">
        <h1>Add a Team</h1>
            <label>Title:</label>
            <input type="text" name="name"><br>
            
            <button type="submit" name="createGame" value="createGame">Create Team</button>
    </form>
</div>
    
<style>
    .team-container {
        width: 500px;
        clear: both;
    }

    .team-container input {
        width: 300px;
        clear: both;
        display: inline;
    }

    .team-container label {
        display: inline-block;
        clear: left;
        width: 100px;
        text-align: right;
    }
</style>

<?php
    $content = ob_get_clean(); 

    include TEMPLATES_PATH . '/layout.php';
?>