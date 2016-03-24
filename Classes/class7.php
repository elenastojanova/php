<?php 
class Bag {
    private $color;
    private $brand;

    public function __construct($color, $brand) {
        $this->color = $color;
        $this->brand = $brand;
    }



    public function show_off() {
        echo 'This bag is ' . $this->color . " and made from ".$this->brand."<br>";
    }
}

$bag1 = new Bag ('blue', 'Benetton');
$bag2 = new Bag ('red', 'Zara');
$bag1->show_off();
$bag2->show_off();

?>