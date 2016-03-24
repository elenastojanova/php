<?php
class Person{
	private $name;
	private$age;
	private$address;

	public function setName($name) { 
		$this->name = $name; 
	} 

	public function setAge($age) { 
		$this->age = $age; 
	} 

	public function setAddress($address) { 
		$this->address = $address; 
	} 

	  public function lice() {
		echo "The first person is ".$this->name.", has ".$this->age."and lives on the ".$this->address.". <br>";

	}
}

$new1 = new Person;
$new1->setName('Elena Stojanova');
$new1->setAge(22);
$new1->setAddress("M.Tito 26/6");
$new1->lice();
?>