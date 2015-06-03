<?php

$a = ['name' => 'Brad', 'age' => 32];

header('Content-Type: application/json');
echo json_encode($a);
