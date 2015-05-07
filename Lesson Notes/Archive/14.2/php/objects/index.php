<?php

class Home {

	public $rooms = [];
	public $city = '';
	public $color = '';
	public $type = '';

	public function __construct($city, $color, $type) {
		$this->city = $city;
		$this->color = $color;
		$this->type = $type;
	}

	public function addRoom($type) {
		$this->rooms[] = new Room($type, 400);
	}

}

class Room {
	public $type, $sq;
	public function __construct($type, $sq) {
		$this->type = $type;
		$this->sq = $sq;
	}
}

$h1 = new Home('Phoenix', 'Tan', 'Stucco');
$h1->addRoom('living');

$h2 = new Home('Mesa', 'Red', 'Brick');
$h2->addRoom('living');
