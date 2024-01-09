<?php
class Product {
    private $name;
    private $price;
    private $category;
    private $image;

    public function __construct($name, $price, $category, $image) {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->image = $image;
    }

    public function getProductDetails() {
        // Restituisce un array con i dettagli del prodotto
        return [
            'name' => $this->name,
            'price' => $this->price,
            'category' => $this->category,
            'image' => $this->image,
        ];
    }
}