<?php

include_once __DIR__ . '/Product.php';


class domestic_appliances extends Product {
    public $discount;

    public function __construct($name_brand,$type,$price,$discount) {
        //1 passare valori originali al padre
        parent::__construct($name_brand,$type,$price);
        // settare nuova proprietà
        $this->discount = $discount;
    }

    public function fridgePrice() {
        return $this->price - ($this->price * $this->discount/100);
    }
}