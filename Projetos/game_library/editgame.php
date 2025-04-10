<?php

include_once "templates/header.php";
include_once "dao/gameDao.php";
include_once "model/Game.php";


if(isset($_POST["gameToEdit"])){

    $selectedGameId = $_POST["gameToEdit"];
}
$gameDao = new GameDao($conn);
$game = new Game();

//Busca o jogo pelo ID
$game = $gameDao->bringSelectedGame($selectedGameId);

?>

<section class="nav-header">
    <h1 class="main-title">Adicionar um novo jogo</h1>
    <a class="header-link" href="index.php">Voltar</a>
</section>
<section class="new-game-content">
    <h2 class="second-tittle">Edição de jogo:</h2>
    <form action="editgameprocess.php" method="POST" enctype="multipart/form-data">
        <div class="game-img-container"><label for="gameImg" class="img-label">Capa do jogo:</label><input type="file" name="gameImg" id="gameImg"></div>
        <input type="hidden" name="id" value="<?= $game->id ?>">
        <h2>Id: #<?= $game->id ?></h2>
        <input type="text" name="title" id="title" value="<?= $game->title ?>" placeholder="Título do jogo">
        <textarea name="description" id="description" placeholder="Descrição do jogo"><?= $game->description ?></textarea>
        <input type="submit" value="Atualizar jogo">
    </form>
</section>