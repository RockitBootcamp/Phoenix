<?php
// namespace RockIT\TechGames;

require_once 'Team.php';
require_once 'database/db.php';

class TeamManager {

	public static function createNew(){ 
        $team = new team();
        return $team;
    }

	public function updateTeam($team) {
	    $db = new DB();
	    $results = $db->execute("UPDATE team SET name ='{$team->getName()}' 
	        WHERE $team_id = '{$team->getTeamId()}'");
	    $result = $results->fetch_assoc();
	    if (!$result){
	        die("database is jacked");
	    }
	}

	public function createTeam($team) {
	    $db = new DB();
	    $insert = "INSERT INTO team (name) VALUES ('{$team->getName()}')";
	    
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