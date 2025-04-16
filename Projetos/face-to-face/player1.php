<?php
session_start();

include_once "dao/characterDao.php";
include_once "model/Character.php";
include_once "db.php";

$character = new Character();

$characterDao = new CharacterDao($conn);

$character = $characterDao->getData();

$selectedCharacter = new Character();

$selectedCharacter = $characterDao->bringChosenCharacter();

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
    <?php foreach($character as $char):?>
            <form action="pickcharacterprocessplayerone.php" method="POST">
                <input type="hidden" name="characterId" value="<?= $char->id; ?>">
                <input type="hidden" name="characterName" value="<?= $char->name; ?>">
                <input type="hidden" name="characterImage" value="<?= $char->image; ?>">
                <button type="submit" class="character">
                    <div class="character-photo" style="background-image: url('img/characters/<?= $char->image; ?>'); background-position: center; background-size: 100%;">
                        
                    </div>
                    <div class="character-info">
                        <?= $char->name ?>
                    </div>
                </button>
            </form>
            <?php endforeach; ?>
        </section>
        <section class="hidden-character">
            <div class="character-photo">
                Selecione seu personagem
            </div>
            <div class="character-info">
                Selecione seu personagem
            </div>
        </section>
    </main>
</body>

</html>