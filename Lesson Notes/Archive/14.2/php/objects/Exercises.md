PHP Class and Objects Homework
====================

Expercises to help learn and master objects and classes. These exercises will cover:


* **PHP: 3.2.1** Demonstrate making a class:
	* enclosing class structure
	* defining methods
	* defining attributes
* **PHP: 3.2.2** Demonstrate making a constructor
* **PHP: 3.2.3** Demonstrate instantiating a class with new keyword
* **PHP: 3.2.4** Demonstrate use of this keyword
* **PHP: 3.2.5** Explain Encapsulation
* **PHP: 3.2.6** Use of visibility keywords:
	* public
	* private
* **PHP: 3.3.1** Explain Inheritance
	* code reuse
	* seamlessly fit into existing systems 
* **PHP: 3.3.2** Demonstrate an inherited class
	* show a base class with a usage scenario
	* show how child class is implemented and fits in place of base class
* **PHP: 3.3.3** Demonstrate method overriding
* **PHP: 3.3.4** Use of Protected visibility keyword

**Bonus**
* Explain Abstract Classes and Methods
* Demonstrate using Abstract Classes


## Exercise 1
1. Create a animal class that takes name in the constructor
2. Instansiate two different animals (Dog, Cat)
3. Echo out each name

## Exercise 2
1. Create a furnature class that takes seatingCapacity in the constructor
2. Instansiate different furnature (Chair, Couch, LoveSeat)
3. Echo out each seatingCapacity

## Exercise 3
1. Create a Light class
2. Create a private member called color
2. Add a method to setColor, getColor
2. Instansiate two different Lights
3. Echo out the color 

## Exercise 4
1. Create a Computer class
2. Create a private member called memorySize
3. Add a method to setMemorySize, getMemorySize
4. Instansiate two different Computers
5. Echo out the MemorySize 

## Exercise 6
1. Create a book class that takes title and author
2. Instansiate two different books
3. Create a book class that takes title and author
4. Echo out each title and author

## Exercise 7
1. Create a Light class that takes color and size
2. Create a private member called color
2. Create a private member called size
2. Add a method to setColor, getColor
3. Add a method to setSize, getSize
2. Instansiate two different Lights
3. Echo out the color and size 

## Exercise 8
1. Create a footware class that takes hasLaces
2. Create a subclass of sandle that sets hasLaces to false
2. Instansiate two different footware (shoe, sandle)
3. Echo out each hasLaces

## Exercise 9
1. Create a building class that takes floors
2. Create a tower subclass and bunker subclass
2. Create a private members called bottomFloor, topFloor 
2. Instansiate tower with bottomFloor 1, topFloor 100
2. Instansiate bunker with bottomFloor -10, topFloor 1
3. Echo out each bottomFloor

## Exercise 10
1. Create an Animal class that takes favoriteFood
2. Create a protected members called favoriteFood
3. Assume (Meat = 1, Veggies=2, Meat & Veggies = 3) for favoriteFood
4. Create a protected method called Likes(food)
	1. return false;
4. Create a public method called Eat(food) (Where food is 1,2, or 3)
	5. Return "Yum" if this animal likes the food (depends on result of likes method)
	6. Return "Grose" if this animal does NOT like the food
	6. Use the protected methoded called likes(food)
3. Create an Omnivore, Carnivore, Herbavoire subclasses
4. Implement the likes(food method) in the subclasses
	5. return True if food is the animals favoriteFood 
	6. return False if food is NOT the animals favoriteFood 
2. Instansiate a Carnivor, Herbavor, and Omnivore
3. Echo the response to eat(1), eat(2), eat(3)

