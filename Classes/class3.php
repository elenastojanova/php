<?php
class Laptop {
	private $boja = 'crna';
	private $proizvoditel = 'Asus';
	private $osystem = 'Windows';

	public function setOsystem($s){
		$osystems = ['Linux', 'Windows', 'Mac', 'Sky'];

		if(in_array($s, $osystems)){
			$this -> osystem = $s;
		}else {
			echo "$s is not on the operating system's list.";
		}
	}

	public function getBoja(){
		return $this->boja;
	}

	public function __construct($s){
		$osystems = ['Linux', 'Windows', 'Mac', 'Sky'];

		if(in_array($s, $osystems)){
			$this->osystem = $s;
		}else {
			$this->osystem = 'Windows';
		}
	}

	public function faveLap(){
		echo "My temporary laptop is ".$this->proizvoditel." so boja ".$this->boja." i koristi operativen sistem ".$this->osystem."<br>";
	}


}

$l1 = new Laptop('Linux');
// $l1->setOsystem('Linux');
// $l1->getBoja();
$l1->faveLap();

unset($l1);

?>