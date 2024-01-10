<?php

trait Pricetable {
    private $price;

    public function setPrice($_price) {
        if($_price > 0) {
            $this->price = $_price;
        } else {
            return 'Error: il prezzo deve essere un numero positivo';
        }
    }

    public function getPrice() {
        return $this->price . 'kg';
    }
}