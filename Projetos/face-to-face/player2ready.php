<?php
session_start();

include_once "dao/characterDao.php";
include_once "model/Character.php";
include_once "db.php";

$character = new Character();

$characterDao = new CharacterDao($conn);

$character = $characterDao->getDataPlayer1();

$selectedCharacter = new Character();

$characterToHide = new Character();

$selectedCharacter = $characterDao->bringChosenCharacterPlayerTwo();

if (empty($selectedCharacter)) {
    $characterDao->resetGame();
    header("Location: gameOverPlayer2.php");
}

?>

<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Face-to-face</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <main>
        <section class="all-characters">
            <?php foreach ($character as $char): ?>


                <div class="character">
                    <div class="character-photo"
                        style="background-image: url('img/characters/<?= $char->image; ?>'); background-position: center; background-size: 100%;">
                    </div>
                    <div class="character-info">
                        <div><?= $char->name ?> <i class="fa-solid fa-flag"></i></div>
                        <div class="character-guess-or-remove">
                            <form action="hidechar2.php" method="POST">
                                <input type="hidden" name="characterId" value="<?= $char->id; ?>">
                                <input type="hidden" name="characterName" value="<?= $char->name; ?>">
                                <input type="hidden" name="characterImage" value="<?= $char->image; ?>">
                                <input type="hidden" name="guessOrRemove" value="guess">
                                <button type="submit" class="guess-btn">
                                    Palpitar
                                </button>
                            </form>
                            <form action="hidechar2.php" method="POST">
                                <input type="hidden" name="characterId" value="<?= $char->id; ?>">
                                <input type="hidden" name="characterName" value="<?= $char->name; ?>">
                                <input type="hidden" name="characterImage" value="<?= $char->image; ?>">
                                <input type="hidden" name="guessOrRemove" value="remove">
                                <button type="submit" class="guess-btn">
                                    Descartar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </section>
        <section class="hidden-character">
            <div class="character-photo"
                style="background-image: url('img/characters/<?= $selectedCharacter->image; ?>'); background-position: center; background-size: 100%;">

            </div>
            <div class="character-info">
                <?= $selectedCharacter->name; ?>
            </div>
        </section>
    </main>
</body>

</html>