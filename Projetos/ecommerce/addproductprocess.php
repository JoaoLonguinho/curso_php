<?php
require_once "model/User.php";
require_once "dao/UserDao.php";

$user = new User();
$userDao = new UserDao($conn, $BASE_URL);

$user = $userDao->getSessionToken();

$user_id = $user->id;
$productName = filter_input(INPUT_POST, "productName");
$productDesc = filter_input(INPUT_POST, "productDesc");
$productPrice = filter_input(INPUT_POST, "productPrice");

