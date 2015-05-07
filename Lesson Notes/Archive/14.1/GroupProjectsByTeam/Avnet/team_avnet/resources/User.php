<?php
// namespace RockIT\TechGames;

// require_once 'database/db.php';
  
// Start Database Object
// $db = new DB();

class User {

    private $firstName = ''; 
    private $lastName = '';
    private $email = '';
    private $password = '';
    private $userId = 0;
    private $gender = '';
    private $age = '';
    private $address = '';
    private $website = '';
    private $school = '';
    private $bio = '';
    private $day ='';
    private $date = '';
    private $time = '';
    private $title = '';   


    public $isAuthenticated = false;

    
    public function __construct() {
        
    }

    public function getDisplayName(){
        return $this->firstName . ' ' . $this->lastName;
    }
    public function getFirstName() {
        
        return $this->firstName;
    }
    
    public function setFirstName($firstName) {
        // Return name
        $this->firstName = $firstName;
    }

    public function getLastName() {
        
        return $this->lastName;
    }
    
    public function setLastName($lastName) {
        // Return name
        $this->lastName = $lastName;
    }

    public function getEmail() {
        
        return $this->email;
    }
    
    public function setEmail($email) {

         $this->email =$email; 
    }

    public function getPassword() {
        
        return $this->password;
    }
    
    public function setPassword($password) {

         $this->password =$password; 
    }
    
    public function getId() {        
        
        return $this->userId;
    }

    public function getgender() {
        
        return $this->gender;
    }
    
    public function setgender($gender) {

         $this->gender =$gender; 
    }

    public function getage() {
        
        return $this->age;
    }
    
    public function setage($age) {

         $this->age =$age; 
    }    

    public function getaddress() {
        
        return $this->address;
    }
    
    public function setaddress($address) {

         $this->address =$address; 
    }  

    
    public function getwebsite() {
        
        return $this->website;
    }
    
    public function setwebsite($website) {

         $this->website =$website; 
    }   

    public function getschool() {
        
        return $this->school;
    }
    
    public function setschool($school) {

         $this->school =$school; 
    }   

    public function getbio() {
        
        return $this->bio;
    }
    
    public function setbio($bio) {

         $this->bio =$bio; 
    }   
    
    public function getDay() {
        
        return $this->Day;
    }
    
    public function setDay($Day) {

         $this->Day =$Day; 
    }  


    public function getDate() {
        
        return $this->Date;
    }
    
    public function setDate($Date) {

         $this->Date =$Date; 
    }  

    public function getTime() {
        
        return $this->Time;
    }
    
    public function setTime($Time) {

         $this->Time =$Time; 
    }  

    public function getTitle() {
        
        return $this->Title;
    }
    
    public function setTitle($Title) {

         $this->Title =$Title; 
    } 


    public function getAvatar($size = 80){

        return $this->get_gravatar($this->email, $size);
    } 

    private function get_gravatar( $email, $s = 80, $d = 'mm', $r = 'g', $img = false, $atts = array() ) {
        $url = 'http://www.gravatar.com/avatar/';
        $url .= md5( strtolower( trim( $email ) ) );
        $url .= "?s=$s&d=$d&r=$r";
        if ( $img ) {
          $url = '<img src="' . $url . '"';
          foreach ( $atts as $key => $val )
              $url .= ' ' . $key . '="' . $val . '"';
          $url .= ' />';
        }
        return $url;
    }

}