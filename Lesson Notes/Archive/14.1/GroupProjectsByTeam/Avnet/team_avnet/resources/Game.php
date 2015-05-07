<?php
// namespace RockIT\TechGames;

// require_once 'database/db.php';
  
// Start Database Object
// $db = new DB();

class Game {

    private $gameId = 0;
    private $title = ''; 
    private $description = '';
    private $startTime = '';
    private $endTime = '';
    private $equipment = '';
    private $skills = '';
    private $scoring = '';
    
    public function __construct() {
        
    }

    public static function withRow( array $row ) {
        $instance = new self();
        $instance->fill( $row );
        return $instance;
    }


    protected function fill( array $row ) {
        $this->gameId = $row['game_id'];
        $this->title = $row['title'];
        $this->description = $row['description'];
        $this->startTime = $row['start_time'];
        $this->endTime = $row['end_time'];
        $this->equipment = $row['equipment'];
        $this->skills = $row['skill_requirements'];
        $this->scoring = $row['scoring'];
    }

    public function getId() {
        return $this->gameId;
    }

//Title
    public function getTitle() {
        return $this->title;
    }
    
    public function setTitle($title) {
        $this->title = $title;
    }

//Description
    public function getDescription() {
        return $this->description;
    }
    public function setDescription($description) {
         $this->description = $description;
    }

//Start-Time
    public function getStartTime() {
        return $this->startTime;
    }
    public function setStartTime($startTime) {
         $this->startTime = $startTime;
    }

//End-Time
    public function getEndTime() {
        return $this->endTime;
    }
    public function setEndTime($endTime) {
         $this->endTime = $endTime;
    }

//Equipment
    public function getEquipment() {
        return $this->equipment;
    }
    public function setEquipment($equipment) {
         $this->equipment = $equipment;
    }

//Skills
    public function getSkills() {
        return $this->skills;
    }
    public function setSkills($skills) {
         $this->skills = $skills;
    }

//Scoring
    public function getScoring() {
        return $this->scoring;
    }
    public function setScoring($scoring) {
         $this->scoring = $scoring;
    }
}