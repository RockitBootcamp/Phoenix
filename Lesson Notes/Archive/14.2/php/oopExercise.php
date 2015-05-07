<?php 
//strategy pattern
//assume 1=meat, 2=veggies, 3=meat & veggies
class Animal{
	
	protected $favoriteFood

	public function __construct($favoriteFood){
		$this->favoriteFood = $favoriteFood;
	}

	protected function Likes($food){
		return false;
	}

	public function Eat($food){
		if ($this->Likes($food)){
			return "yumm";
		}else{
			return "gross";
		}
	}
}

class Herbivore extends Animal{

	public function __construct(){
		parent::__construct(2);
	}

	protected function Likes($food){
		return $this->favoriteFood == $food;
	}
}

class Omnivore extends Animal{

	public function __construct(){
		parent::__construct(3);
	}

	protected function Likes($food){
		return true;
	}
} 

class Carnivore extends Animal{

	public function __construct(){
		parent::__construct(1);
	}

	protected function Likes($food){
		return $this->favoriteFood == $food;
	}
}

$lion = new Carnivore();
$lion->eat(1); // yumm
$lion->eat(2); // gross
$lion->eat(3); // gross

$dino = new Omnivore();
$dino->eat(1); // yumm
$dino->eat(2); // yumm
$dino->eat(3); // yumm

$rabbit = new Herbivore();
$rabbit->eat(1); //gross
$rabbit->eat(2); //yumm
$rabbit->eat(3); //gross
