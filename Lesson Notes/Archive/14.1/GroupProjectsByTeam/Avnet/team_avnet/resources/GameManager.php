<?php
// namespace RockIT\TechGames;

require_once 'Game.php';
require_once 'database/db.php';

class GameManager {

    public static function createNew(){ 
        $game = new game();
        return $game;
    }

    public static function getGame($id) {
        
        $db = new DB();

        // Fetch user info       
        $results = $db->execute("SELECT * FROM game WHERE game_id = $id LIMIT 1");
        $result = $results->fetch_assoc();

        // get  user name            
        $game = Game::withRow($result);
        $game->isAuthenticated = true;

        return $game;
    }

    public static function getAllGames(){
        $db = new DB();
        $query = "SELECT * FROM game";
        $games = $db->execute($query);
        
        // print_r($games);
        return $games;
      
    }

    public function updateGame($game) {
        $db = new DB();
        $results = $db->execute("UPDATE game SET title ='{$game->getTitle()}',
            description ='{$game->getDescription()}', start_time ='{$game->getStartTime()}',
            end_time ='{$game->getEndTime()}', equipment ='{$game->getEquipment()}',
            skill_requirements ='{$game->getSkills()}', scoring ='{$game->getScoring()}', 
            WHERE $game_id = '{$game->getGameId()}'");
        $result = $results->fetch_assoc();
        if (!$result){
            die("database is jacked");
        }
    }

    public function createGame($game) {
        $db = new DB();
        $insert = "INSERT INTO game (title, description, start_time, end_time, equipment, skill_requirements, scoring) 
            VALUES ('{$game->getTitle()}', '{$game->getDescription()}',
                '{$game->getStartTime()})','{$game->getEndTime()}', 
                '{$game->getEquipment()})','{$game->getSkills()}', '{$game->getScoring()}')";

        $results = $db->execute($insert);
        
        if(!is_null($results)){
            if($results != 1){
                $result = $results->fetch_assoc();

                if (!$result){
                    die("database is jacked");
             
                }
            }
        }
    }
}