<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 'on');
    

    if (!(session_status() == PHP_SESSION_ACTIVE)) {
        include('initialize.php');
        $userName = '';
    }

    function last_user_id() {

    }

    if($_POST){
        
        if (!is_numeric($_SESSION['id'])) {
            //A user is NOT logged in

            if ($_POST['action']=='login') {
                include ('login.php');

                // $userName = logIn();

            } else if($_POST['action']=='register'){
                include ('register.php');

                // $userName = register(); 

            }
        }else if($_POST['action']=='logOut'){
            // A user IS logged in
            $_SESSION['id'] = 'false';
            }
    }

    require 'layout.php';


?>




