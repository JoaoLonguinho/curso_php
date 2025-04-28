<?php

class Product{
    public $id;
    public $productName;
    public $productDesc;
    public $productPrice;

    public $user_id;

    function productsInCart(){
        print_r($_SESSION["cartItens"]);
    }
}