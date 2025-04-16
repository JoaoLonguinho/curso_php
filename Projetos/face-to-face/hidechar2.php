<?php

include_once "dao/characterDao.php";
include_once "model/Character.php";
include_once "db.php";

if (isset($_POST)) {
        $chosenCharacter = new Character();
        $characterDao = new CharacterDao($conn);
        $selectedCharacter = new Character();
        $chosenCharacter = $characterDao->bringChosenCharacter();
        $selectedCharacter->id = $_POST["characterId"];
        $selectedCharacter->name = $_POST["characterName"];
        $selectedCharacter->image = $_POST["characterImage"];
        $selectedCharacter->selected = true;
    if($_POST["guessOrRemove"] === "guess"){
        if($chosenCharacter->id == $selectedCharacter->id){
            header("Location: player2win.php");
        }
        else{
            header("Location: gameOverPlayer2.php");
        }
    }
    else{
        if($chosenCharacter->id != $selectedCharacter->id){
            $characterDao->hideChar($selectedCharacter);
            header("Location: player2ready.php");
        }
        else{
            header("Location: gameOverPlayer2.php");
        }
    }
}