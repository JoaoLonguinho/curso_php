<?php

include_once "templates/header.php";
include_once "dao/gameDao.php";
include_once "model/Game.php";

if (isset($_GET["gameView"])) {
    $gameId = $_GET["gameView"];
}

$game = new Game();

$gameDao = new GameDao($conn);

$game = $gameDao->bringSelectedGame($gameId);


?>

<section class="nav-header">
    <h1 class="main-title"><?= $game->title ?></h1>
    <a class="header-link" href="index.php">Voltar</a>
</section>
<section class="new-game-content">
    <div class="game-content">
        <div class="img-cover">
            <img src="img/games/<?= $game->image; ?>" alt="">
        </div>
        <div class="game-info">
            <h2><?= $game->title; ?></h2>
            <p><?= $game->description; ?></p>
            <p>Atualmente o jogo está rankeado em <?= $game->rating ?> estrelas,
                <?php if ($game->rating == 5): ?>
                    sendo assim, é um jogo que podemos dizer que recomendamos bastante!
                </p>
            <?php elseif ($game->rating == 4): ?>
                sendo assim, ainda é considerado um ótimo jogo!</p>
            <?php elseif ($game->rating == 3): ?>
                sendo assim, podemos dizer que é um jogo mais ou menos</p>
            <?php elseif ($game->rating == 2): ?>
                sendo assim, podemos dizer que não é um jogo muito bom </p>
            <?php elseif ($game->rating == 1): ?>
                sendo assim, é um jogo ruim </p>
            <?php endif; ?>
        </div>
    </div>

</section>