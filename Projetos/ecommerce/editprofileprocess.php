<?php 

require_once "templates/header.php";
require_once "model/User.php";
require_once "dao/UserDao.php";
require_once "model/Product.php";
require_once "dao/ProductDao.php";

$user = new User();
$userDao = new UserDao($conn, $BASE_URL);
$product = new Product();
$productDao = new ProductDao($conn, $BASE_URL);

$user = $userDao->getSessionToken();

$name = filter_input(INPUT_POST, "name");
$email = filter_input(INPUT_POST, "email");

$user->setUserName($name);
$user->setUserEmail($email);

if(!empty($user->name) && !empty($user->email)){
    $userDao->update($user, true);
    $message->setMessage("Dados atualizados com sucesso!", "success", "back");
}