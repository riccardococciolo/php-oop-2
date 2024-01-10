<?php
require_once __DIR__ . "/Category.php";
require_once __DIR__ . "/../Traits/Pricetable.php";

class Product {
    use Pricetable;

    private $name;
    private $price;
    private $image;
    private $category;

    public function __construct($_name, $_price, Category $_category, $_image) 
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->image = $_image;
        $this->category = $_category;
    }

    public function setName($_name) {
        $this->name = $_name;
    }

    public function setImage($_image) {
        $this->image = $_image;
    }

    public function setPrice($_price) {
        $this->price = $_price;
    }

    public function setCategory($_category) {
        $this->category = $_category;
    }

    public function getName() {
        return $this->name;
    }

    public function getImage() {
        return $this->image;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getCategory() {
        return $this->category;
    }
}
?>