<?php

class Product {
    private $title;
    private $price;
    private $image;

    public function __construct($title, $price, $image) {
        $this->setTitle($title);
        $this->setPrice($price);
        $this->setImage($image);
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        $this->image = $image;
    }
}

?>
