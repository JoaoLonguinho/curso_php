<?php

class Product{
    public $id;
    public $productName;
    public $productDesc;
    public $productPrice;

    public $user_id;

    public function productsInCart(){
        if(!empty($_SESSION["cartItens"])){
            return $_SESSION["cartItens"];
        }
        else{
            return false;
        }
    }
}