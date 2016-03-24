<?php

class Product {
	private $productTitle = "Title";
	private $productName = "name";
	private $productPrice = 0;

	public function setProductTitle( $t){
		$this->productTitle = $t;
	}

	public function setProductName( $n ) {
        $this->productName = $n;
    }
 
    public function setProductPrice( $p ) {
        $this->productPrice = $p;
    }
 
    public function getProduct() {
        $temp = "Title: " . $this->productTitle . " <br />";
        $temp .= "Name: " . $this->productName . " <br />";
        $temp .= "Price: " . $this->productPrice . " <br />";
        return $temp;
    }
 
}
$product1 = new Product();
$product1->setProductTitle( "Samsung" );
$product1->setProductName( "Samsung Galaxy S6 Edge" );
$product1->setProductPrice( "$599" );

$product = $product1->getProduct();
echo $product;



?>