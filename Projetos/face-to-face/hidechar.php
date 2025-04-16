<?php

include_once "dao/characterDao.php";
include_once "model/Character.php";
include_once "db.php";

if (isset($_POST)) {
    $selectedCharacter = new Character();
    $characterDao = new CharacterDao($conn);
    $selectedCharacter->id = $_POST["characterId"];
    $selectedCharacter->name = $_POST["characterName"];
    $selectedCharacter->image = $_POST["characterImage"];
    $selectedCharacter->selected = true;

    $characterDao->hideChar($selectedCharacter);
    header("Location: player1ready.php");
}