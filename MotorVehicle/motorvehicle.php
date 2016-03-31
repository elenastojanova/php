<?php

class Vehicle {
	protected $description;
	protected $color;
	protected $fuelType;

	public function setDescription ($d){
		$this->description = $d;
	}

	public function setColor ($d){
		$this->color = $d;
	}

	public function setFuelType ($f){
		$this->fuelType = $f;
	}

}

class Car extends Vehicle {
	protected $wheelSize;
	protected $passenger;

	public function setWheelSize($w){
		$this->wheelSize = $w;
	}

	public function setPassenger($p){
		$this->passenger = $p;
	}

	public function display(){
		return "Description: <b>" .$this->description . "</b><br>Color: <b>".$this->color . "</b><br>Fuel Type: <b>" .$this->fuelType .
		 "</b><br>Wheel Size: <b>".$this->wheelSize . "mm</b><br> Number of Passengers: <b>" .$this->passenger. "</b><br><hr><br>";

	}

}

class Motorcycles extends Vehicle {
	protected $engineType;

	public function setEngine($e){
		$this->engineType = $e;
	}

	public function display2(){
		return "Description: <b>" .$this->description . "</b><br>Color: <b>".$this->color . "</b><br>Fuel Type: <b>" .$this->fuelType .
		 "</b><br>Engine Type: <b>".$this->engineType . "</b><br><hr><br>";
	}
}

class Trucks extends Vehicle {
	protected $cabSize;
	protected $weighing;

	public function setCab($c){
		$this->cabSize = $c;
	}

	public function setWeighing($we){
		$this->weighing = $we;
	}

	public function display3(){
		return "Description: <b>" .$this->description . "</b><br>Color: <b>".$this->color . "</b><br>Fuel Type: <b>" .$this->fuelType .
		 "</b><br>Cab Size: <b>".$this->cabSize . "</b><br>Weighing <b>".$this->weighing . "</b><br><hr><br>";
	}

}

class Small extends Car {
	protected $type;

	public function setType($t){
		$this->type = $t;
	}

	public function display4(){
		return "Description: <b>" .$this->description . "</b><br>Color: <b>".$this->color . "</b><br>Fuel Type: <b>" .$this->fuelType .
		"</b><br>Wheel Size: <b>".$this->wheelSize."</b><br>Number of passengers: <b>".$this->passenger. "</b><br>Type: <b>"
		.$this->type ."</b><br><hr><br>";
	}
	
}

class Large extends Car {
	protected $cargo;

	public function setCargo($ca){
		$this->cargo = $ca;
	}

	public function display5(){
		return "Description: <b>" .$this->description . "</b><br>Color: <b>".$this->color . "</b><br>Fuel Type: <b>" .$this->fuelType .
		 "</b><br>Wheel Size: <b>".$this->wheelSize."</b><br>Number of passengers: <b>".$this->passenger. "</b><br>Cargo Capacity: <b>"
		 .$this->cargo ."cubic feet of trunk space</b><br><hr><br>";
	}

}

class Sport extends Motorcycles {

	protected $biketype;

	public function setBikeType($ty){
		$this->biketype = $ty;
	}

	public function display6(){
		return "Description: <b>" .$this->description . "</b><br>Color: <b>".$this->color . "</b><br>Fuel Type: <b>" .$this->fuelType .
		  "</b><br>Engine Type: <b>".$this->engineType . "</b><br>Bike class: <b>".$this->biketype ."</b><br><hr><br>";
	}


}

class Touring extends Motorcycles {
	protected $bikeName;

	public function setBikeName($na){
		$this->bikeName = $na;
	}

	public function display7(){
		return "Description: <b>" .$this->description . "</b><br>Color: <b>".$this->color . "</b><br>Fuel Type: <b>" .$this->fuelType .
		 "</b><br>Engine Type: <b>".$this->engineType . "</b><br>Bike name: <b>".$this->bikeName ."</b><br><hr><br>";
	}
}

class Light extends Trucks {
	protected $bedLenghts;

	public function setbedLenghts($b){
		$this->bedLenghts = $b;
	}

	public function display8(){
		return "Description: <b>" .$this->description . "</b><br>Color: <b>".$this->color . "</b><br>Fuel Type: <b>" .$this->fuelType .
		  "</b><br>Cab Size: <b>".$this->cabSize . "</b><br>Weighing <b>".$this->weighing ."</b><br>Bed Lenghts: <b>"
		  .$this->bedLenghts ."</b><br><hr><br>";
	}
}

class Heavy extends Trucks {
	protected $maxWeight;

	public function setMaxWeight($mw){
		$this->maxWeight = $mw;
	}

	public function display9(){
		return "Description: <b>" .$this->description . "</b><br>Color: <b>".$this->color . "</b><br>Fuel Type: <b>" .$this->fuelType .
		  "</b><br>Cab Size: <b>".$this->cabSize . "</b><br>Weighing <b>".$this->weighing ."</b><br>Max Weight: <b>"
		  .$this->maxWeight ."</b><br><hr><br>";
	}

}

$car1 = new Car();
$car1 -> setDescription('Car');
$car1->setColor('white');
$car1->setFuelType('Diesel');
$car1->setWheelSize(2500);
$car1->setPassenger(5);
echo $car1-> display();

$motor1 = new Motorcycles();
$motor1 -> setDescription('Motorcycle');
$motor1->setColor('black');
$motor1->setFuelType('Diesel');
$motor1->setEngine('V-12 Cyline');
echo $motor1-> display2();

$truck1 = new Trucks();
$truck1 -> setDescription('Truck');
$truck1->setColor('black');
$truck1->setFuelType('Premium unleaded petrol');
$truck1->setWeighing('Electronic');
$truck1->setCab('Regular Cab');
echo $truck1-> display3();

$car2 = new Small();
$car2-> setDescription('Small Car');
$car2->setColor('blue');
$car2->setFuelType('Premium unleaded petrol');
$car2->setWheelSize(2500);
$car2->setPassenger(3);
$car2->setType('Small Sedans');
echo $car2-> display4();

$car3 = new Large();
$car3-> setDescription('Large Car');
$car3->setColor('silver');
$car3->setFuelType('Diesel');
$car3->setWheelSize(3500);
$car3->setPassenger(8);
$car3->setCargo('17-12');
echo $car3-> display5();

$motor2 = new Sport();
$motor2-> setDescription('Sport Motorcycles');
$motor2->setColor('black');
$motor2->setFuelType('Diesel');
$motor2->setEngine('Two-Stroke Engines');
$motor2->setBikeType('Superbike');
echo $motor2-> display6();

$motor3 = new Touring();
$motor3-> setDescription('Touring Motorcycles');
$motor3->setColor('red');
$motor3->setFuelType('Premium unleaded petrol');
$motor3->setEngine('Chains');
$motor3->setBikeName('Bagger');
echo $motor3-> display7();

$truck2 = new Light();
$truck2-> setDescription('Light Trucks');
$truck2->setColor('white');
$truck2->setFuelType('Diesel');
$truck2->setWeighing('Electronic');
$truck2->setCab('Extended Cab');
$truck2->setbedLenghts(6.8, 8.2);
echo $truck2 -> display8();

$truck3 = new Heavy();
$truck3-> setDescription('Heavy Trucks');
$truck3->setColor('silver');
$truck3->setFuelType('Diesel');
$truck3->setWeighing('Electronic');
$truck3->setCab('Crew Cab');
$truck3->setMaxWeight('50 tones');
echo $truck3 -> display9();


?>