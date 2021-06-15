<?php 

require_once(__DIR__ ."./shop.php");

class Client extends Shop {
    protected $name;
    protected $age;
    protected $card;
    protected $discount = 0;

    public function setName($value){
        $this->name = $value;
    }

    public function getName(){
        return $this->email;
    }

    public function setAge($value){
        $this->age = $value;
    }

    public function getAge(){
       return $this->age;
    }

    public function setCard($value){
        $this->age = $value;
    }

    public function getCard(){
       return $this->age;
    }

    public function setDiscount($eta){
        if($this->age !== $eta){
           $this->setAge($eta);
        } 
        
        if($eta < 60){
            $this->discount = 40;
        }else if ($eta > 18){
            $this->discount = 20;
        }   
    }

    public function getDiscount(){
        return $this->discount;
    }   
}
