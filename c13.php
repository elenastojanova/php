<?php 

class Roditel {
	protected $parent_name='Risto';
	protected $parent_age = 50;

}

class Child extends Roditel {
	protected $child_name = 'Mimi';
	protected $child_age = 22;

	public function setChildName($name){
		$this->child_name = $name;
	}

	public function setChildAge($age){
		$this->child_age = $age;
	}

	public function setParentName($namep){
		$this->parent_name = $namep;
	}

	public function setParentAge($agep){
		$this->parent_age = $agep;
	}

	public function getChildName(){
		return $this->child_name;
	}

	public function getChildAge(){
		return $this->child_age;
	}

	public function getParentName(){
		return $this->parent_name;
	}

	public function getParentAge(){
		return $this->parent_age;
	}
}

class Vnuche extends Child {
	private $vnuche_name;
	private $vnuche_age;
}

$m1= new Child();


$m1->setParentAge(55);
// $m1->getParentAge();
print_r($m1);
 ?>