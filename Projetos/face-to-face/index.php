<?php
include_once "templates/header.php";
include_once "dao/characterDao.php";
include_once "model/Character.php";
include_once "db.php";

$resetGame = new CharacterDao($conn);

$resetGame->resetGame();
?>
<section class="main-menu">
    <h1>Cara a Cara</h1>
    <h2>The Office</h2>
    <p>Selecione qual jogador você é:</p>
    <div class="players-choose">
        <a href="player1.php">Jogador 1</a>
        <a href="player2.php">Jogador 2</a>
    </div>
</section>
<?php
include_once "templates/footer.php";
?>