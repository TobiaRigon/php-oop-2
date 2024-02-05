<?php

class PetProduct extends Product {
    private $category;

    public function __construct($title, $price, $image, Category $category) {
        parent::__construct($title, $price, $image);
        $this->setCategory($category);
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory(Category $category) {
        $this->category = $category;
    }
}

?>
