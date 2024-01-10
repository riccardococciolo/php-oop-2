<?php
require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Gadgets.php";
require_once __DIR__ . "/Models/FoodProduct.php";

$dog = new Category ("fa-solid fa-dog", "cani");

$cat = new Category ("fa-solid fa-cat", "gatti");

try {
    $catalog = [
        new FoodProduct("ultima", 0, $dog, "fa-solid fa-dog", "croccantini"),
        new gadget("fido", 20, $dog, "fa-solid fa-dog", "peluches"),
        new FoodProduct("monge", 7, $cat, "fa-solid fa-cat", "patè")
    ];
} catch (Exception $e) {
    echo "Errore: " . $e->getMessage();
}