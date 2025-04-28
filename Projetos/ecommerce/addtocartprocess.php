<?php

require_once "templates/header.php";
require_once "model/User.php";
require_once "dao/UserDao.php";
require_once "model/Product.php";
require_once "dao/ProductDao.php";

$user = new User();
$userDao = new UserDao($conn, $BASE_URL);

$user = $userDao->getSessionToken();

$itemToAddInCart = filter_input(INPUT_POST, "cartItens");

$_SESSION["cartItens"][] = $itemToAddInCart;

header("Location: index.php");