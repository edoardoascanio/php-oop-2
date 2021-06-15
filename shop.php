<?php

class Shop {
    public $product;
    public $brand;
    public $price;


    function __construct($product, $brand,$price) {
        $this->setproduct($product);
        $this->setbrand($brand);
        $this->setPrice($price);
    }
   

    public function setproduct($value){
        $this->product = $value;
    }

    public function getproduct(){
        return $this->brand;
    }


    public function setbrand($value){    
        $this->brand = $value;
    }

    public function getbrand(){
        return $this->brand;
    }
    
    public function setPrice($value){
        $this->accessories = $value;
    }

    public function getPrice(){
       return $this->accessories;
    }
}