<?php

require_once "templates/header.php";
require_once "model/User.php";
require_once "dao/UserDao.php";
require_once "model/Product.php";
require_once "dao/ProductDao.php";
require_once "model/Message.php";

$user = new User();
$userDao = new UserDao($conn, $BASE_URL);
$message = new Message($BASE_URL);

$type = filter_input(INPUT_POST, "type");
if($type === "addToCart"){
    $user = $userDao->getSessionToken();

    $itemToAddInCart = filter_input(INPUT_POST, "cartItens");
    
    $_SESSION["cartItens"][] = $itemToAddInCart;

    $message->setMessage("Item adicionado ao carrinho.", "success", "index.php");

}
else if($type === "increaseCart"){
    $productToAdd = filter_input(INPUT_POST, "productId");
    if(!empty($productToAdd)){
        $_SESSION["cartItens"][] = $productToAdd;
        $message->setMessage("Item adicionado ao carrinho.", "success", "cart.php");
    }
}
else if($type === "decreaseCart"){
    $productToRemove = filter_input(INPUT_POST, "productId");

    if (!empty($productToRemove) && !empty($_SESSION["cartItens"])) {
        $index = array_search($productToRemove, $_SESSION["cartItens"]);
        if ($index !== false) {
            unset($_SESSION["cartItens"][$index]);
            
            $_SESSION["cartItens"] = array_values($_SESSION["cartItens"]);
            $message->setMessage("Item removido do carrinho.", "success", "cart.php");
        }
    }
}