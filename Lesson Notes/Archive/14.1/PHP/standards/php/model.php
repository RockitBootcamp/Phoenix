<?php
namespace RockIT\TechGames;

$games = array(
        array("Title"=>"Game1","Description"=>"This is a great game","Duration"=>"30"),
        array("Title"=>"Game2","Description"=>"This is a great game2","Duration"=>"60"),
        array("Title"=>"Game3","Description"=>"This is a great game3","Duration"=>"90"),
        array("Title"=>"Game4","Description"=>"This is a great game4","Duration"=>"120"));

function get_all_games()
{
    return  $GLOBALS["games"];

    if (condition) {
        // pass

    } elseif (condition2) {
        // pass

    } else {
        // pass

    }

}

function get_game_by_id($gameId)
{
    return $GLOBALS["games"][$gameId];
}
