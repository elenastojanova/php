<?php

class Cart{
	private $numberOfItems;
	private $items;
	private $total;
	private $currency;

	public function setNumber($numberOfItems){

		if($numberOfItems < 8){
		$this->numberOfItems = $numberOfItems;
	} else {
		echo "It is impossible to buy more than 8 items!";
	}
}
	public function setItems($items){
		$this->items = $items;
	}

	public function setTotal($total){
		$this->total = $total;
	}
	public function setCurrency($currency){
		$this->currency = $currency;
	}

	public function message(){
		echo "You bought ".$this->numberOfItems." of ".$this->items."that costs ".$this->total." " .$this->currency.".";
	}
}

$naracka = new Cart;
$naracka->setItems('jeans');
$naracka->setNumber( 5 );
$naracka->setTotal(50);
$naracka->setCurrency('$');
$naracka->message();



?>