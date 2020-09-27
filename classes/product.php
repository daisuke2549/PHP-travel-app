<?php 
   class Product {
     private $id;
     private $name;
     private $price;
     private $image;

     public function __construct($id, $name, $price, $image){
         $this->id =$id; 
         $this->name = $name;
         $this->price = $price;
         $this->image = $image;
     }


     public function getId(){
       return $this->name;
     }

     public function getName(){
        return $this->name;
     }

     public function getPrice(){
      return $this->price;
    }

    public function getImage(){
       return $this->image;
    }

    private function calPriceIncludedTax(){
       $tacRate = 0.1;
       return $this->price + $this->price * $taxRate;
    }


    public function displayPrice(){ 
       $price = $this->calPriceIncludedTax();
       return $price."円";
    }

   }
?>