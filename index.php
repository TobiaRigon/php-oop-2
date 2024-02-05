<?php

include 'Product.php';
include 'Category.php';
include 'PetProduct.php';

$dogCategory = new Category("Cani", "🐶");
$catCategory = new Category("Gatti", "🐱");

$products = [
    new PetProduct("Croccantini per Cani", 20.99, "./img/dog_food.jpg", $dogCategory),
    new PetProduct("Giocattolo per Gatti", 10.99, "./img/cat_toy.jpg", $catCategory),
    new PetProduct("Cuccia per Cani", 35.99, "./img/dog_food.jpg", $dogCategory),
    new PetProduct("Cibo per Gatti", 15.99, "./img/cat_toy.jpg", $catCategory),
    new PetProduct("Giocattolo per Cani", 12.99, "./img/dog_food.jpg", $dogCategory),
    new PetProduct("Cuccia per Gatti", 29.99, "./img/cat_toy.jpg", $catCategory),
    new PetProduct("Collare per Cani", 8.99, "./img/dog_food.jpg", $dogCategory),
];

function printProductCard(PetProduct $product) {
    echo "<div class='product-card'>";
    echo "<img src='{$product->getImage()}' alt='{$product->getTitle()}'>";
    echo "<h3>{$product->getTitle()}</h3>";
    echo "<p>Prezzo: {$product->getPrice()} €</p>";
    echo "<p>Categoria: {$product->getCategory()->getName()} {$product->getCategory()->getIcon()}</p>";
    echo "</div>";
}

// Stampa delle card dei prodotti specifici usando un foreach
foreach ($products as $product) {
    printProductCard($product);
}

?>
<style>
    img {
        width: 100px;
    }

    .product-card {
        text-align:center;
        background-color: gray;
        border-radius: 8px;
        padding: 20px;
        max-width: 60%;
        min-width: 400px;
        margin: 10px auto;
    }
</style>
