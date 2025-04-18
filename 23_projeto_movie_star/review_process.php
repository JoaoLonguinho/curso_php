<?php
require_once "globals.php";
require_once "db.php";
require_once "models/Movie.php";
require_once "models/Message.php";
require_once "dao/userDAO.php";
require_once "dao/movieDAO.php";

#Recebendo tipo form
$type = filter_input(INPUT_POST, "type");

$message = new Message($BASE_URL);
$movieDao = new MovieDao($conn, $BASE_URL);
$userDao = new UserDao($conn, $BASE_URL);

$userData = $userDao->verifyToken();

if($type === "create"){

}