<?php

include_once "model/Game.php";
include_once "dao/gameDao.php";

$game = new Game();

$gameDao = new GameDao($conn);

$gameToDelete = $_POST["gameToDelete"];

$game->setGameId($gameToDelete);

$gameDao->deleteGame($game);

header("Location: index.php");