<?php 
//namespace RockIT\TechGames;

error_reporting(E_ALL);
ini_set('display_errors', 'on');

//use RockIT\TechGames;
$title = "Create a Game";

    ob_start();
?>
<div class="game-container">
    <form action="//<?=APP_PATH?>/index.php/createGame" method="POST">
        <h1>Add a Game</h1>
            <label>Title:</label>
            <input type="text" name="title"><br>
            <label>Description:</label>
            <input type="text" name="description"><br> 
            <label>Start Time:</label>
            <input type="time" name="start_time"><br>
            <label>End Time:</label>
            <input type="time" name="end_time"><br>
            <label>Equipment:</label>
            <input type="text" name="equipment"><br>
            <label>Skill Requirements:</label>
            <input type="text" name="skill_requirements"><br>
            <label>Scoring:</label>
            <input type="text" name="scoring"><br>
            
            <button type="submit" name="createGame" value="createGame">Create Game</button>
    </form>
</div>
    
<style>
    .game-container {
        width: 500px;
        clear: both;
    }

    .game-container input {
        width: 300px;
        clear: both;
        display: inline;
    }

    .game-container label {
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