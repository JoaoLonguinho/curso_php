<?php

class Product{
    public $id;
    public $productName;
    public $productDesc;
    public $productPrice;

    public $user_id;

    public function productsInCart(){
        return $_SESSION["cartItens"];
    }
}