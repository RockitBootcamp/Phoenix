<?php
namespace RockIT\TechGames;
// index.php

require_once 'model.php';

$students = get_all_students();

require 'studentList.php';
