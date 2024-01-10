<?php
class FoodProduct extends Product {
    private $foodType;

    public function __construct($name, $price, $category, $image, $foodType) {
        parent::__construct($name, $price, $category, $image);
        $this->foodType = $foodType;
    }

    public function getFoodType() {
        return $this->foodType;
    }
}