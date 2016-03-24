<?php
class Kola {
	private $boja = 'bela';
	private $proizvoditel = 'Ford';
	private $cost = '15000';

	public function setBoja($b){
		$boi = ['crna', 'siva', 'crvena', 'sina'];

		if(in_array($b, $boi)){
			$this->boja = $b;
		} else {
			echo "$b is not good color.";
		}
	}

	public function getBoja(){
		return $this->boja;
	}
}

$kola1 = new Kola;
$kola1->setBoja ('siva');
$kola1->getBoja

print_r($kola1);
?>