<?php

class Test {
	public function __set($name, $value){
		echo "Setting <b>$name</b> to <b>$value</b>";
	}

	public function __get($name){
		return 'Pero';
	}
}

// $t = new Test;
// // $t->pero= 'test 123';
// echo $t->ime;
// echo '<br>';
// echo $t->prezime;
// echo '<br>';
// echo $t->den_na_ragjanje;
// echo '<br>';


class Test2 {
	private $vars = array();

	public function __set($name, $value){

		$this->vars[$name] = $value;
	}

	public function __get($name){
		return $this->vars[$name];
	}
}


$t2 = new Test2;

$t2->ime = 'elena';
$t2->prezime='stojanova';
$t2->vozrast=22;

print_r($t2);

class Test3{
	private $boja='zelena';
	private $visina = 10;

	public function __get($b){
		if(property_exists($this, $b)){
		return $this->$b;
	}else {
		return false;
	}
	}
}

// $t3= new Test3;
// echo $t3->boja;
// echo $t3->visina;


class Test4{
	public function __call($name, $args){
		echo 'Method: '.$name.', Arguments: '.implode(', ', $args);
	}
}

// $t4 = new Test4;
// $t4->brmbrm();
// echo '<br>';
// $t4->test('Pero', 'Janko', 'Stanko');
// echo '<br>';
// $t4->mjau();

class StaticClass{

	public static $string;

	public static function length(){
		return strlen(self::$string);
	}
}

staticClass::$string = 'Hello world';
echo StaticClass::length();


?>