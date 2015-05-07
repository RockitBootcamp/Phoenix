<?php

class User {
    public $name;
}

$user = new User;
$user->name = 'Brad';

//-----------------------------


class User {
    private $name;
    public function __construct($name) {
        if (!is_string($name)) return;
        $this->name = $name;
    }
}

$user = new User('Brad');


//-----------------------------


class User {
    private $name;

    public function setName($name) {
        if (!is_string($name)) return;
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

$user = new User;
$user->setName('Brad');

echo $user->getName();