<?php
//namespace RockIT\TechGames;

require_once 'User.php';
require_once 'database/db.php';

class UserManager {

    public static function createNew(){ 
        
        $user = new user();
        return $user;

    }
    
    public static function signIn($email, $password){ 

        $user = new user();

        $db = new DB();

        // Fetch user info       
        $results = $db->execute("SELECT * FROM user WHERE email = '$email' LIMIT 1");
        $result = $results->fetch_assoc();

        // Authenticate User  
        $hash= sha1($password);           
        if ($hash == $result['password']) {  

            $user->firstName = $result['first_name'];
            $user->lastName = $result['last_name'];
            $user->email = $result['email'];
            $user->password = $result['password'];
            $user->userId = $result['user_id'];
            $user->gender = $result['gender'];
            $user->age = $result['age'];
            $user->address = $result['address'];
            $user->website = $result['website'];
            $user->school = $result['school'];
            $user->bio = $result['bio'];
            $user->isAuthenticated = true;

            return $user;
       }

       return $user;
    }

    public static function getUser($id) {
    	
        $user = new user();
        $db = new DB();

        // Fetch user info       
        $results = $db->execute("SELECT * FROM user WHERE user_id = '$id' LIMIT 1");
        $result = $results->fetch_assoc();

        // get  user name            
        $user->firstName = $result['first_name'];
        $user->lastName = $result['last_name'];
        $user->email = $result['email'];
        $user->password = $result['password'];
        $user->userId = $result['user_id'];
        $user->gender = $result['gender'];
        $user->age = $result['age'];
        $user->address = $result['address'];
        $user->website = $result['website'];
        $user->school = $result['school'];
        $user->bio = $result['bio'];
        $user->isAuthenticated = true;

        return $user;
    }
    public static function updatePassword($user) {
        $db = new DB();
        $results = $db->execute("UPDATE user SET password ='" . sha1($user->getPassword()) ."'
            WHERE user_id = '{$user->getId()}'");
       
        if(!is_null($results)){
            if($results != 1){
                $result = $results->fetch_assoc();

                if (!$result){
                    die("database is jacked");
             
                }
            }
        }
    }


    public static function updateUser($user) {
        $db = new DB();
        $results = $db->execute("UPDATE user SET first_name ='{$user->getFirstName()}',
            last_name='{$user->getLastName()}', email ='{$user->getEmail()}', 
            gender ='{$user->getgender()}', age ='{$user->getage()}',
            address ='{$user->getaddress()}', website ='{$user->getwebsite()}',
            school ='{$user->getschool()}', bio ='{$user->getbio()}'
            WHERE user_id = '{$user->getId()}'");
       
        if(!is_null($results)){
            if($results != 1){
                $result = $results->fetch_assoc();

                if (!$result){
                    die("database is jacked");
             
                }
            }
        }
    }


    public static function createUser($user) {
       
        $db = new DB();
        $insert = "INSERT INTO user  (
                first_name,
                last_name, 
                email, 
                password, 
                gender, 
                age, 
                address,
                website, 
                school, 
                bio) 
            VALUES (
                '{$user->getFirstName()}',
                '{$user->getLastName()}',
                '{$user->getEmail()}',
                '" . sha1($user->getPassword()) ."',
                '{$user->getgender()}', 
                '{$user->getage()}', 
                '{$user->getaddress()}', 
                '{$user->getwebsite()}', 
                '{$user->getschool()}', 
                '{$user->getbio()}'
            )";

        
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