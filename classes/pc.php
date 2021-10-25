<?php

include_once __DIR__ . '/Product.php';

class pc extends Product {
    public $address;

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getAddress() {
        return $this->$address;
    }

}