<!-- Animal lion = new Animal();
Animal zebra = new Animal();
Animal bear = new Animal();

lion->setFoodType(1);   // carnivore;
zebra->setFoodType(2);  // herbivore;
bear->setFoodType(3);   // omnivore;

Array animals = [lion, zebra, bear];

Zookeeper bob = new Zookeeper();
bob.setMeat(10);
bob.setVeggies(10);

foreach animal in animals {    
    bob.feed(animal);
    print bob.getFoodStatus();
}
/////////////
meat:   8
veggies:10

meat:   8
veggies:8

meat:   7
veggies:7
////////////////

//1. How do I even make a class
//2. Look inside feed method
//3. What that foodtype all about -->

<?php

class Animal {

    protected $foodType;
    private $color;
    private $name;
    private $age;
    private $weight;

    function __construct(){

        // 1=meat, 2=herb, 3=omni
        $this->foodType = 0;
        $this->color = "red";
        $this->name = "UNKNOWN";
        $this->age = 20;
        $this->weight = 100;
    }

    public function setFoodType($foodType){

        // Validate foodType to be 1, 2, 3

        $this->foodType = $foodType;
    }

    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }

    public function getAge(){
        return $this->age;
    }

    public function getColor(){
        return $this->color;
    }
    public function setColor($color){
        $this->color = $color;
    }

    public function getWeight(){
        return $this->weight;
    }
    public function setWeight($weight){
        $this->weight = $weight;
    }

    public function getFoodType(){
        return $this->foodType;
    }

    public function foo(){
        return "Parent";
    }
}


class Omnivore extends Animal{
    
    function __construct(){
        parent::__construct();
        $this->foodType = 3;        
    }
}

class Carnivore extends Animal{
    
    function __construct(){
        parent::__construct();
        $this->foodType = 1;        
    }
}

class Herbivore extends Animal{
    
    function __construct(){
        parent::__construct();
        $this->foodType = 2;        
    }
}

class Zombie extends Carnivore{
    
    
    
}

class Zookeeper {

    private $meatAmount;
    private $veggieAmount;
    
    function __construct(){
        $this->meatAmount = 10;
        $this->veggieAmount = 10;           
    }

    public function feedAll($animals){

        foreach($animals as $animal){
            $this->feed($animal);
        }
    }

    public function feed($animal){

        // Feed 10% of weight
        $amount = $animal->getWeight() * .1;

        if($animal->getFoodType() == 1){
            // Feed meat
            $this->meatAmount = $this->meatAmount - $amount;

        } elseif($animal->getFoodType() == 2){
            // Feed Veggies
            $this->veggieAmount = $this->veggieAmount - $amount;

        } elseif($animal->getFoodType() == 3){
            // Feed Both
            $this->meatAmount = $this->meatAmount - ($amount / 2);
            $this->veggieAmount = $this->veggieAmount - ($amount / 2);
        } 

        $animal->setWeight($animal->getWeight() + $amount);

    }

    public function getFoodStatus(){
        return "Meat: ". $this->meatAmount . " veggies: ".$this->veggieAmount;
    }
}

 $zebra = new Herbivore();
 $zebra->setWeight(800);

 $bear = new Omnivore();
 $bear->setWeight(1200);

 $lion = new Carnivore();
 $lion->setWeight(600);

 $jack = new Zombie();
 $jack->setWeight(100);

 $animals = Array($zebra, $bear, $lion, $jack);

 $bob = new Zookeeper();

 echo $bob->getFoodStatus();
 echo "<br>".$lion->getWeight();
 $bob->feed($lion);
 //$bob->feedAll($animals);
 echo "<br>".$bob->getFoodStatus();
 echo "<br>".$lion->getWeight();
 echo "<br>".$jack->getWeight();
 
 // $bob->feed($bear);
 // echo "<br>".$bob->getFoodStatus();
 // $bob->feed($zebra);
 // echo "<br>".$bob->getFoodStatus();
 // $bob->feed($jack);
 // echo "<br>".$bob->getFoodStatus();

 // $zebra->setName("Zeb"); 
 $zebra->setColor("Black and white"); 

?>

<h1>Hi</h1>

<p>My FoodType is: <?= $zebra->getFoodType() ?></p>
<p>My FoodType is: <?= $bear->getFoodType() ?></p>
<p>My FoodType is: <?= $lion->getFoodType() ?></p><!-- 

<p>My Name is: <?= $zebra->getName() ?></p>
<p>My Age is: <?= $zebra->getAge() ?></p>
<p>My Color is: <?= $zebra->getColor() ?></p>
<p>My FoodType is: <?= $bear->getFoodType() ?></p>
<p>My FoodType is: <?= $bear->getHornType() ?></p>
<p>My Foo is: <?= $bear->foo() ?></p> -->




