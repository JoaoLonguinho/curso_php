<?php
include_once "dao/characterDao.php";
include_once "model/Character.php";
include_once "db.php";

$selectedCharacter = new Character();

$characterDao = new CharacterDao($conn);

$selectedCharacter = $characterDao->bringChosenCharacterPlayerTwo();

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Face-to-face</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <section class="game-over">
            <p>Você venceu!</p>
            <p>O personagem do outro jogador era:</p>
            <section class="hidden-character">
                <div class="character-photo"
                    style="background-image: url('img/characters/<?= $selectedCharacter->image; ?>'); background-position: center; background-size: 100%;">

                </div>
                <div class="character-info">
                    <?= $selectedCharacter->name; ?>
                </div>
            </section>
            <a href="index.php">Deseja jogar novamente?</a>
        </section>
    </main>
</body>

</html>