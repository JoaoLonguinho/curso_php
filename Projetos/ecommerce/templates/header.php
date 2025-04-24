<?php

require_once "db.php";
require_once "globals.php";
require_once "model/Message.php";
require_once "dao/UserDao.php";
require_once "model/User.php";

$message = new Message($BASE_URL);
$user = new User();
$userDao = new UserDao($conn, $BASE_URL);

$flashMessage = $message->getMessage();

if (!empty($flashMessage["msg"])) {
    $message->clearMessage();
}

$user = $userDao->getSessionToken();


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <nav>
            <ul class="main-nav">
                <a href="index.php">
                    <li>Home</li>
                </a>
                <li>Sobre nós</li>
                <a href="profile.php">
                    <li>Perfil</li>
                </a>
                < href="login.php">
                    <li>Login</li>
                    </a>
                    <li>Entre em contato</li>
            </ul>
        </nav>
    </header>
    <main>
        <?php if (!empty($flashMessage["msg"])): ?>
            <div class="msg-container">
                <p class="msg <?= $flashMessage["type"] ?>"><?= $flashMessage["msg"] ?></p>
            </div>
        <?php endif; ?>