<?php
class Kilim {
	private $boja = 'kafena';
	private $golemina = 'sreden';
	private $proizvoditel = 'Klimiko';

	public function setBoja($b){
		$boi = ['kafena', 'crna', 'bela', 'siva', 'zolta'];

		if(in_array($b, $boi)){
			$this -> boja = $b;
		} else {
			echo "$b is not a nice color.";
		}
	}

	public function getBoja(){
		return $this->boja;
	}

	public function have() {
		echo "Nasiot omilen kilim e ".$this->boja." boja proizvenden od ".$this->proizvoditel.". <br>";
	}

	public function __construct($b){
			$boi = ['kafena', 'crna', 'bela', 'siva', 'zolta'];

			if(in_array($b, $boi)){
				$this->boja=$b;
			} else {
				$this->boja = 'kafena';
			}
	}

	public function setProizvoditel($p){
		$proizvoditeli = ['Domitalia', 'Kares', 'MarketKonekt', 'Merinos'];

		if(in_array($p, $proizvoditeli)){
			$this -> proizvoditel = $p;
		} else {
			echo "$p is not a nice color.";
		}
	}

	public function __destruct(){
		echo "destructor";
	}
}

$a1 = new Kilim('bela');
// $a1->setBoja('bela');
// $a1->getBoja();
$a1->setProizvoditel('Merinos');
$a1->have();
// print_r($a1);

unset($a1);

echo "<br>";
?>