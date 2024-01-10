<?php
class FoodProduct extends Product {
    private $foodType;

    public function __construct($_name, $_price, $_category, $_image, $_foodType) {
        parent::__construct($_name, $_price, $_category, $_image);
        $this->foodType = $_foodType;
    }

    public function getFoodType() {
        return $this->foodType;
    }
};