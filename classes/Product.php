<?php

class Product {
    
    public $name_brand;
    public $price;
    public $quantity;

   
    public function __construct($name_brand, $type, $price) {
        $this->name_brand = $name_brand;
        $this->type = $type;
        $this->price = $price;

    }

    public function printInfo() {
        return $this->type . ' ' . 'brand' . ' ' . $this->name_brand;
    }

}
