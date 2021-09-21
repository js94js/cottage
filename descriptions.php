<?php

// Classes
// A class is a template from which we create objects. Within the class we define properties and methods. 
// example:
class Car{
	//properties
	public string $manufacturer;
	public string $model;
	public string $colour;
	
	// methods
	function setManufacturer($manufacturer){
		$this->manufacturer = $manufacturer;
	}
	function setModel($model){
		$this->model = $model;
	}
	function setColour($colour){
		$this->colour = $colour;
	}
	function drive(){
		
	}
	function stop(){
		
	}
	
}




// Objects
// An object is an instance of a class; they are given their own unique property values
// example:
$someonesCar = new Car();
$someonesCar->setManufacturer('Ford');
$someonesCar->setModel('Focus');
$someonesCar->setColour('Blue');






// Methods
// a method is a function within a class and can only be used on an instance of an object
// example:
$someonesCar->drive();








// Class inheritance
// class inheritance is when a class is created that is derivative of another class. it will inherit all of the properties and methods of the parent class but can be also given properties and methods that are unique to itself
// example:
class SportsCar extends Car{
	function driveReallyFast(){
		
	}
}








// Method overloading
// method overloading is a way of dynamically creating methods within objects that can have the same name but behave differently depending on the number of parameters passed into it
// example:
class Person{
	function __call($name,$arg){
		if ($name == 'sayName'){
			switch (count($arg)){
				case 0:
					return 'I have no name';
				case 1:
					return 'My name is ' . $arg[0];
				case 2:
					return 'My first name is ' . $arg[0] . ' and my surname is ' . $arg[1];
			}
		}
	}
}






// Singleton
// a singleton is a way of creating an object that only allows one instance of a given class
// example:
class Singleton
{
    private static $instance = null;

    private function __construct() {}

    public static function getInstance(): self
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}
?>