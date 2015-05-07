<?php
namespace RockIT\TechGames;

require_once 'model.php';

$game = get_game_by_id(1);

require 'templates/gameDetail.php';
