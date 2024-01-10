<?php
class Product {
    private $name;
    private $price;
    private $image;

    public function __construct($name, $price, $category, $image) 
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }

    public function setName($_name) {
        $this->name = $_name
    }

    public function setImage($_image) {
        $this->image = $_image
    }

    public function setPrice($_price) {
        $this->price = $_price
    }

    public function getName() {
        return $this->name
    }

    public function getImage() {
        return $this->Image
    }

    public function getPrice() {
        return $this->price
    }
}