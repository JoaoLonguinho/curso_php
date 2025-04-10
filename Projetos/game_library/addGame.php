<?php

include_once "templates/header.php";

?>

<section class="nav-header">
    <h1 class="main-title">Adicionar um novo jogo</h1>
    <a class="header-link" href="index.php">Voltar</a>
</section>
<section class="new-game-content">
    <h2 class="second-tittle">Insira os dados do jogo:</h2>
    <form action="newgameprocess.php" method="POST" enctype="multipart/form-data">
        <div class="game-img-container"><label for="gameImg" class="img-label">Capa do jogo:</label><input type="file" name="gameImg" id="gameImg"></div>
        <input type="text" name="title" id="gameTitle" placeholder="Nome do jogo">
        <textarea name="description" id="description" placeholder="Descrição" row="10"></textarea>
        <input type="submit" value="Cadastrar jogo">
    </form>
</section>