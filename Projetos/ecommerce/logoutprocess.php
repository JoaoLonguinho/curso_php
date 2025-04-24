<?php

require_once "dao/UserDao.php";

$userDao = new UserDao($conn, $BASE_URL);

$type = filter_input(INPUT_POST, "type");

if($type === "logout"){
    $userDao->destroyToken();
    $message->setMessage("Logout efetuado com sucesso.", "success", "login.php");
}