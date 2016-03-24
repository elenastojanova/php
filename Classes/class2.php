<?php

class Books {
	private $avtor;
	private $golemina;
	private $naslov;

	public function setAvtor($a){
		$avtori = ['Dostoevski', 'Jelena Alim', 'Maskim Gorki', 'Paulo Koeljo'];
		 if (in_array($a, $avtori)){
		 	$this -> avtor = $a;
		 } else {
		 	echo "Avtorot ne postoi.";
		 }
	}

	public function getAvtor(){
		return $this-> avtor . "<br>";
	}

	public function setNaslov($n){
		$this-> naslov = $n;
	}

	public function getNaslov(){
		return $this-> naslov . "<br>";
	}

	public function setGolemina($g){
		$this-> golemina = $g;
	}

	public function getGolemina(){
		return $this-> golemina . "<br>";
	}

	public function faveAvtor(){
		echo "My favourite author is ".$this->avtor." and the book names ".$this->naslov." that has ".$this->golemina." strani. <br>";
	}
}


$temnina = new Books;
$temnina->setAvtor('Dostoevski');
$temnina->getAvtor();
$temnina->setNaslov('Temnina');
 $temnina->getNaslov();
$temnina->setGolemina( 55 );
$temnina->getGolemina();



$zahir = new Books;
$zahir->setAvtor('Paulo Koeljo');
$zahir->getAvtor();
$zahir->setNaslov('Zahir');
$zahir->getNaslov();
$zahir->setGolemina( 158 );
$zahir->getGolemina();
$zahir->faveAvtor();

?>