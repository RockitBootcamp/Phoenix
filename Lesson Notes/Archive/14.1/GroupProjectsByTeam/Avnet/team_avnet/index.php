<?php
//namespace RockIT\TechGames;

require_once('resources/config.php');
require_once('resources/UserManager.php');
require_once('resources/GameManager.php');
require_once('resources/TeamManager.php');
require_once('resources/FormValidator.php');

$user = userManager::createNew();

if (isset($_SESSION['userId']) ) {

    if($_SESSION['userId'] !=0){

        // Get the user
        $user = userManager::getUser($_SESSION['userId']);
        $user -> isAuthenticated = true;
    }
}

// $error_array = array();
// $error_string = "";   
// $hasErrors = false;    
// $registered = false;
// $title = "UNKNOWN";
// $activeTab = '';


// Get Routing info
$urlParts = parse_url($_SERVER['REQUEST_URI']);
$url = $urlParts["path"];
$pieces = explode('/', $url);
$tail = $pieces[count($pieces)-1];    
$isPost = ($_SERVER['REQUEST_METHOD'] == "POST");

// Routing
if ($tail == 'index.php' && $isPost == false) { 
    indexAction($user);    
} elseif ($tail == '' && $isPost == false) {    
    indexAction($user);
} elseif($tail == "account"){
    profileAccountAction($user);
} elseif(preg_match('/^gameHome/', $tail)){

    if(array_key_exists("query", $urlParts)){

        $qPieces = explode('=', $urlParts["query"]);
        $query = $qPieces[1];
        //echo $query;
        if(preg_match('/^gameHome/', $query)){
            profileGameAction($user, $game);
        } elseif(preg_match('/^gameRegDetails/', $query)){
            gameRegDetailsAction($user, $game);
        } elseif(preg_match('/^gameDetails/', $query)){
            gameDetailsAction($user, $game);
        } elseif(preg_match('/^gameSchedule/', $query)){
            gameScheduleAction($user, $game);
        } elseif(preg_match('/^gameResults/', $query)){
            gameResultsAction($user, $game);
        }   
    } else {
        profileGameAction($user, $game);
    }

} elseif($tail == "about"){
    aboutAction($user);         

}elseif($tail == "changePassword"){
    passwordAction($user, $isPost);
       
} elseif($tail == "profileDetail"){
       

} elseif($tail == "changePassword"){
    passwordAction($user);          
} elseif($tail == "profile"){

    if(array_key_exists("query", $urlParts)){

        $qPieces = explode('=', $urlParts["query"]);
        $query = $qPieces[1];

        //echo $query;

        if($query == "name"){
            profileNameAction($user, $isPost);     
        } elseif($query == "account"){
            profileAccountAction($user, $isPost);
        } elseif($query == "profile"){
            profileProfileAction($user, $isPost);
        } elseif($query == "schedule"){
            profileScheduleAction($user, $isPost);             
        }
         else {
            profileNameAction($user, $isPost);             
        }
    }
    else
    {
        profileNameAction($user, $isPost);      
    }  
} elseif($tail == "games"){
    gameOverviewAction($user);        
} elseif($tail == "createGame"){
    gameDetailAction($user, $isPost);
} elseif($tail == "createTeam"){
    teamDetailAction($user, $isPost);    
}elseif($tail == "signOut"){
    signOutAction();
} elseif($tail == 'index.php' && $isPost == true){
    
    // Check if Register or Signup
    if (!empty($_POST['register'])) {
        registerAction();          
    } elseif (!empty($_POST['signIn'])) {
        signInAction();      
    }
}elseif($tail == "schools"){

    $school_results = array();
    
   
    array_push($school_results, "Univeristy of RockIT");

   
   
    array_push($school_results, "Arizona State Univeristy");

   
   
    array_push($school_results, "Univeristy of Arizona");


    header('Content-Type: application/json');
    echo json_encode($school_results);
    //echo $school_results[0]['name'];

}else {
    indexAction($user);
}


// Action Section

function indexAction($user)
{
    // Set data needed for View
    $activeTab = "home"; 
    $title = "Avnet Tech Games";
    $games = GameManager::getAllGames();
 // print_r($games);
    // Show View
    require 'templates/homeView.php'; 

}

function aboutAction($user){
    // Set data needed for View
    $activeTab = "about"; 
    $title = "Avnet Tech Games";

    // Show View
    require 'templates/about.php'; 
}

function profileGameAction($user, $game){
    
    $game = GameManager::getGame($_GET['gameId']);

    // Set data needed for View
    $activeTab = "gameHome";
    $title = "Avnet Tech Games - Game";
    // Show View
    require 'templates/game/gameHome.php';
}

function gameRegDetailsAction($user, $game){

    $game = GameManager::getGame($_GET['gameId']);

    // Set data needed for View
    $activeTab = "gameRegDetails";
    $title = "Avnet Tech Games - Game - Registration Details";
    // Show View
    require 'templates/game/gameRegDetails.php';
}

function gameDetailsAction($user, $game){

    $game = GameManager::getGame($_GET['gameId']);

    // Set data needed for View
    $activeTab = "gameDetails";
    $title = "Avnet Tech Games - Game - Details";
    // Show View
    require 'templates/game/gameDetails.php';
}

function gameScheduleAction($user, $game){

    $game = GameManager::getGame($_GET['gameId']);

    // Set data needed for View
    $activeTab = "gameSchedule";
    $title = "Avnet Tech Games - Game - Schedule";
    // Show View
    require 'templates/game/gameSchedule.php';
}

function gameResultsAction($user, $game){

    $game = GameManager::getGame($_GET['gameId']);

    // Set data needed for View
    $activeTab = "gameResults";
    $title = "Avnet Tech Games - Game - Results";
    // Show View
    require 'templates/game/gameResults.php';
}

function profileNameAction($user, $isPost){

    // Set data needed for View
    $hasErrors = false;
    $activeTab = "name";
    $title = "Avnet Tech Games - Profile";

    if($isPost){

        //Validate input 
        $validations = array(
            'userId' => 'number',
            'first_name' => 'words',
            'last_name' => 'words',
            'address' => 'words',
            'website' => 'words',
            'age' => 'number',
            'gender' => 'words');
        $required = array('userId', 'first_name', 'last_name');
        $sanitize = array('first_name', 'last_name', 'address', 'website','age','gender');
        $validator = new FormValidator($validations, $required, $sanitize);

        if($validator->validate($_POST)) {
            
            userManager::getUser($_POST['userId']);

            $user->setFirstName($_POST['first_name']);
            $user->setLastName($_POST['last_name']);
            $user->setaddress($_POST['address']);
            $user->setwebsite($_POST['website']);
            $user->setage($_POST['age']);
            $user->setgender($_POST['gender']);
               
            userManager::updateUser($user);

        }else {
            // TODO: Show error message 
           $hasErrors = true;

        }

    }

    // Show View
    require 'templates/profile/profileDetail.php';
}

/// to change email at the account setting page
function profileAccountAction($user, $isPost){

    // Set data needed for View
    $hasErrors = false;
    $activeTab = "account";
    $title = "Avnet Tech Games - account";
    if($isPost){

        //Validate input 
        $validations = array(
            'userId' => 'number',
            'email' => 'email'
            );
        $required = array('userId','email');
        $sanitize = array('userId','email');
        $validator = new FormValidator($validations, $required, $sanitize);

        if($validator->validate($_POST)) {
            
            userManager::getUser($_POST['userId']);

            $user->setEmail($_POST['email']);
          
               
            userManager::updateUser($user);

        }else {
            // TODO: Show error message 
            //echo "Not valid: email ";
            $hasErrors = true;
           // print_r($validator->getErrors()["email"]);
        }

    }


    require 'templates/profile/profileAccountView.php';
}

function profileScheduleAction($user){

    $activeTab = "schedule";
    $title = "Avnet Tech Games - Profile";

    require 'templates/profile/profileScheduleView.php';

}

/// to change school or bio profile page 
function profileProfileAction($user, $isPost){

    // Set data needed for View
     $hasErrors = false;
    $activeTab = "profile";
    $title = "Avnet Tech Games - profile";
    if($isPost){

        //Validate input 
        $validations = array(
            'userId' => 'number',
            'bio' => 'words',
            'school' => 'words'
            );
        $required = array('school','userId');
        $sanitize = array('school','bio');
        $validator = new FormValidator($validations, $required, $sanitize);


        if($validator->validate($_POST)) {
            
            userManager::getUser($_POST['userId']);

            $user->setschool($_POST['school']);
            $user->setbio($_POST['bio']);
          
               
            userManager::updateUser($user);

        }else {
           $hasErrors = true;
      
        }

    }


    require 'templates/profile/profile.php';
}
//valadtion and for password change 
function passwordAction($user, $isPost){
    
    // Set data needed for View
    $activeTab = "changePassword";
    $title = "Avnet Tech Games - Profile";
    if($isPost){
        $validations = array(
            'userId' => 'number',
            'email' => 'email',
            'ReTypenewPassword' => 'anything',
            'oldPassword' => 'anything',
            'password' =>'anything');
        $required = array('password','userId', 'email', 'oldPassword', 'ReTypenewPassword');
        $sanitize = array('password','userId', 'email', 'oldPassword', 'ReTypenewPassword');
        $validator = new FormValidator($validations, $required, $sanitize);

        if($validator->validate($_POST)) {
//print_r($validator);
            
            // Authenticate the user
            $user = userManager::signIn($_POST['email'],$_POST['oldPassword']);

            // If isAuthenticated
            if($user -> isAuthenticated) {
 
                // userManager::getUser($_POST['userId']);

                $user->setPassword($_POST['password']);
                
                userManager::updatePassword($user);

                // Redirect to account tab
                header( 'Location://' . APP_PATH . "/index.php/profile?t=account" ) ;

                // OR

                // Setup viewData that has Succes info in it.
            }
            
        }else{

            $hasErrors = true;
        }
    }

    // Show View
    require 'templates/profile/changePassword.php';
}

function gameOverviewAction($user){
    

    // Set data needed for View
    $activeTab = "games";
    $title = "Avnet Tech Games - Games";

    // Show View
    require 'templates/other/games.php';
}

function gameDetailAction($user, $isPost){
    
    if ($isPost) {
        
        $game = GameManager::createNew();
        
        $game->setTitle($_POST['title']);
        $game->setDescription($_POST['description']);
        $game->setStartTime($_POST['start_time']);
        $game->setEndTime($_POST['end_time']);
        $game->setEquipment($_POST['equipment']);
        $game->setSkills($_POST['skill_requirements']);
        $game->setScoring($_POST['scoring']);

        GameManager::createGame($game);       
    }

    // Set data needed for View
    $activeTab = "createGame";
    $title = "Avnet Tech Games - Games";

    // Show View
    require 'templates/other/adminGames.php';
}
    

function teamDetailAction($user, $isPost){

    if ($isPost) {
        
        $team = TeamManager::createNew();
        
        $team->setName($_POST['name']);
        
        TeamManager::createTeam($team);       
    }

    // Set data needed for View
    $activeTab = "createTeam";
    $title = "Avnet Tech Games - Teams";

    // Show View
    require 'templates/other/createTeam.php';
}

function signOutAction(){

    // Remove user from session
    $_SESSION = Array();    

    header( 'Location://' . APP_PATH . "/index.php" ) ;
    //$user = userManager::createNew();

    // Show View     
    //require 'templates/homeView.php';

}

function signInAction(){

    // Validate User input
    $validations = array(
        'email' => 'email',
        'password' => 'anything');
    $required = array('email', 'password');
    $sanitize = array('email', 'password');
    $validator = new FormValidator($validations, $required, $sanitize);


    if($validator->validate($_POST)) {
        
        // Authenticate the user
        $user = userManager::signIn($_POST['email'],$_POST['password']);

        // If isAuthenticated
        if($user -> isAuthenticated) {

            $_SESSION['userId'] = $user->getId();

        }
        else{

            // Show home page with error (Bad password username combo)
            // $isAuthenticated = false; 
            $hasErrors = true;
            $errorMessage = "Bad combo";
            echo "not loged in";
            
        }

    } else {
        $hasErrors = true;

    }

    $title = "Avnet Tech Games";
    require 'templates/homeView.php'; 

}

function registerAction(){

    // Validate User input
    $validations = array(
        'first_name' => 'anything',
        'last_name' => 'anything',
        'email' => 'email',
        'password'=>'anything');


    $required = array('first_name', 'last_name', 'email', 'password');
    $sanitize = array('first_name', 'last_name', 'email', 'password');


    $validator = new FormValidator($validations, $required, $sanitize);


    if($validator->validate($_POST)) {

        $user = userManager::createNew();

        $user->setFirstName($_POST['first_name']);
        $user->setLastName($_POST['last_name']);
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);

        userManager::createUser($user);

        
        $user->isAuthenticated = true;                


    } else {
        $isAuthenticated = false; 
        $hasErrors = true;
        $errorMessage = "invalid stuff";

    }

    // Show the view
    $activeTab = "index";
    $title = "Avnet Tech Games";
    require 'templates/homeView.php';
}



    
