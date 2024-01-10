<?php

trait Pricetable {
    private $price;

    public function setPrice($_price) {
        if($_price > 0) {
            $this->price = $_price;
        } else {
            throw new Exception("Il prezzo deve essere positivo");
        }
    }

    public function getPrice() {
        return $this->price . '$';
    }
}