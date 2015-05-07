<?php
namespace RockIT\TechGames;

function get_all_students()
{
    $students = array(
        array("FirstName"=>"George","LastName"=>"Smith","Age"=>"30","School"=>"ASU"),
        array("FirstName"=>"Jamie","LastName"=>"John","Age"=>"30","School"=>"UA"),
        array("FirstName"=>"Susy","LastName"=>"Noel","Age"=>"27","School"=>"BYU"),
        array("FirstName"=>"Mike","LastName"=>"Jackson","Age"=>"45","School"=>"NAU"));

    return  $students;

}
