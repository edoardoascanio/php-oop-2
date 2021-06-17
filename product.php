<?php 

class Product {
    public $name;
    public $qty;
    public $price;

    function __construct($name, $qty, $price){
        $this->name = $name;
        $this->qty = $qty;
        $this->price = $price;
    }
    
    
    public function setname($value){
        $this->name = $value;
    }

    public function getname(){
        return $this->brand;
    }


    public function setqty($value){    
        $this->qty = $value;
    }

    public function getqty(){
        return $this->brand;
    }
    
    public function setPrice($value){
        $this->accessories = $value;
    }

    public function getPrice(){
       return $this->accessories;
    }
}
        
    