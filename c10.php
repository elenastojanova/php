<?php

class Marker{
	private $boja = 'crna';
	private $golemina = 'L';
	private $proizvoditel = 'Faber Castel';

	//methods

	public function setBoja($b){
		$boi =['crvena', 'zelena', 'sina', 'siva', 'crna'];

		if(in_array($b, $boi)){
			$this->boja = $b;
		}else {
			echo "$b is Not a predefined color.";
		}	
	}
	public function getBoja(){
		return $this->boja;
	}

	public function crtaj(){
		echo "Crtam so".$this->boja." boja";
	}

	public function pisuvaj(){
		echo "Pisuvam so ".$this->boja. " boja";
	}

	public function __construct($b){
		$boi =['crvena', 'zelena', 'sina', 'siva', 'crna'];

		if(in_array($b, $boi)){
			$this->boja = $b;
		}else {
			$this->boja = 'crna';
		}
	}

	public function __destruct(){
		echo "DESTRUCTOR";
	}
}

$m1 = new Marker('zelena');
// $m1->boja = 'zelena';
// $m1->setBoja('zelena');
echo $m1->getBoja();
$m1->crtaj();
$m1->pisuvaj();
unset($m1);
ECHO "\nEND\n";

// $m2 = new Marker;
// // $m2->boja = 'crvena';
// $m2->setBoja('crvena');
// // echo $m2->getBoja();

// $m3 = new Marker;
// // $m3->boja = 'zolta';
// $m3->setBoja('zolta');
// // echo $m3->getBoja();

print_r($m1);
// print_r($m2);
// print_r($m3);

?>