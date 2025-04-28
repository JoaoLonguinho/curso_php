<?php
require_once "model/User.php";
require_once "model/Product.php";
require_once "dao/UserDao.php";
require_once "model/Message.php";
require_once "dao/ProductDao.php";

$user = new User();
$userDao = new UserDao($conn, $BASE_URL);
$product = new Product();
$productDao = new ProductDao($conn, $BASE_URL);


$user = $userDao->getSessionToken();

$user_id = $user->id;
$productName = filter_input(INPUT_POST, "productName");
$productDesc = filter_input(INPUT_POST, "productDesc");
$productPrice = filter_input(INPUT_POST, "productPrice");

if(!empty($productName) && !empty($productPrice)){
    $productDao->createProduct($user_id, $productName, $productDesc, $productPrice);
    $message->setMessage("Produto cadastrado com sucesso!", "success", "index.php");
}
else{
    $message->setMessage("O campo Nome o campo Preço não podem estar vazios.", "error", "back");
}