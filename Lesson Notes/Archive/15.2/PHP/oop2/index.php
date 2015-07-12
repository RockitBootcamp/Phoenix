<?php

class Sport {
    public $useHands = true;
    public $hasNet = false;
    protected $points = 0;

    public function score() {
        $this->points++;
    }
}

class Football extends Sport {
    public function score($extraPoint) {

        $this->points += 6;

        if ($extraPoint) {
            parent::score();
        }
    }
}

class Soccer extends Sport {
    public $useHands = false;
    public $hasNet = true;
}

class Baseball extends Sport {
}

class Basketball extends Sport {
    public $hasNet = true;
    public function score() {
        $this->points += 2;
    }
}



$football = new Football;
$football->score(true);