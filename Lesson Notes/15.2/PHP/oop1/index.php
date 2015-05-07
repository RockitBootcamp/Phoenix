<?php

class Cow {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function favColor() {
        return ['blue', 'green'];
    }

}

class Farmer {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function milkCows($cows) {
        
        foreach ($cows as $cow) {
            echo "Farmer $this->name milked cow: $cow->name <br>";
        }

    }
}


$cows = [];


$cowNames = ['Sara', 'Betsy', 'Paula', 'Sue'];

for ($i = 0; $i < 5000; $i++) {

    $name = $cowNames[rand(0, count($cowNames) - 1)];

    $cows[] = new Cow($name);

}



echo $cows[300]->favColor()[0];