Lesson 2: OOP I
---

Objectives
------
* Demonstrate making a class:
    * enclosing class structure
    * defining methods
    * defining attributes
* Demonstrate making a constructor
* Demonstrate instantiating a class with new keyword
* Demonstrate use of this keyword
* Explain Encapsulation
* Use of encapsulation keywords:
    * public
	* private
	* protected
* Explain Inheritance
	* code reuse
	* seamlessly fit into existing systems 
* Demonstrate an inherited class
	* show a base class with a usage scenario
	* show how child class is implemented and fits in place of base class
	
Classes
-------


Exercise
------
1. You are a zookeeper and need to feed the animals. You have two buckets of food (meat, veggies). There are three types of animals at the zoo (carnivore, herbivore, and omnivore). You need to feed all the animals and keep track of how much food you have
	* Create an animal class that has foodType which can be carnivore=1, herbivore=2, or omnivore=3. 
	* If an animal is a carnivore, feed it 2 peices of meat.
	* If it's an herbivore feed it 2 peices of veggies. 
	* If it's an omnivore, feed it 1 peice of meat and 1 peice of veggies. 
	* Create a method on the Zookeeper called feed(animal)
	* Create a method on Zookeeper called getFoodStatus(). This will return how much meat and 	veggies are left.
	* TEST: 
		* Create a ZooKeeper and three animals of each type
		* Print out how much food the zoo keeper has
		* Feed the animal that is a carnivor
		* Print out how much food the zoo keeper has
		* Feed the animal that is a herbivor
		* Print out how much food the zoo keeper has
		* Feed the animal that is a omnivore
		* Print out how much food the zoo keeper has
2. Create Three Subclasses of Animals (Carnivore, Herbivore, Omnivore)
	* Set the foodType in the Constructor of the Subclasses
	* TEST: 
		* Create a ZooKeeper and three animals of each type
		* Print out how much food the zoo keeper has
		* Feed the animal that is a carnivor
		* Print out how much food the zoo keeper has
		* Feed the animal that is a herbivor
		* Print out how much food the zoo keeper has
		* Feed the animal that is a omnivore
		* Print out how much food the zoo keeper has
3. After you feed an animal, increase it's weight size

Exercise 2
------
You are a carwash attendant and need to wash cars. You have a bucket of soap. There are different sized vehicles. You need to wash all the dirty cars and keep track of how much soap you have left.

1. Create a Vehicle class that has properties size and isDirty
2. Create a Attendant Class
	* Add a getSoapAmount to Attendant Class that returns how much soap is left
	* Add Wash method to Attendant which takes a vehicle
   	* If vehicle is dirty, wash it and decrease you soap amout based on vehicle size (10%)
5. Change isDirty to Clean if washed
	
Exercise 3
---
You are a monster fighter Hero. Your job is to kill the monsters. Monsters have properies: hair color, killType. Hero has a kill method and engery. Each time you kill a monster your engery goes down. 


