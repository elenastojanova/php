<?php
class Animal
{
    private $name = "No-name animal";
    private $age;
    private $color;
    
    public function  setName($name)
    {
        $this-> name = $name;
    }

    public function color($color){
    	$this-> color = $color;
    }

    public function age($age){
    	$this->age= $age;
    }

    public function type(){
    	echo "The name of the animal is: ". $this->name
    	.", it is ".$this->color." and it is ".$this->age."years old <br>";
    }
}

$dog= new Animal;
$dog->setName('Aros');
$dog->color('white');
$dog->age(2);
$dog->type();
?>