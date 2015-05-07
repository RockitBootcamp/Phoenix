<?php 

/*
    Creating constants for heavily used paths makes things a lot easier.
    ex. require_once(LIBRARY_PATH . "Paginator.php")
*/

defined("APP_PATH")
    or define("APP_PATH", $_SERVER['SERVER_NAME'] . '/team_avnet');

defined("PUBLIC_PATH")
    or define("PUBLIC_PATH", APP_PATH . '/public_html');

     
defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath('./templates'));


/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);

// Have rolling sesssion
$lifetime=600; // 10 min
session_start();
setcookie(session_name(),session_id(),time()+$lifetime);
