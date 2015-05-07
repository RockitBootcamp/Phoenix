<?php
// namespace RockIT\TechGames;

// require_once 'database/db.php';
  
// Start Database Object
// $db = new DB();

class Team {

    private $name = ''; 
    
    public function __construct($db_row) {
        
    }

    public function getName() {
        return $this->name;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
}