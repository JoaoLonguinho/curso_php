<?php

include_once "db.php";
include_once "model/Character.php";

class CharacterDao
{
    private $conn;

    public function getDataPlayer1()
    { // Busca o Id, nome e imagem no banco para tela do player
        $characterList = [];

        $stmt = $this->conn->prepare("SELECT * FROM player1");

        $stmt->execute();

        $characterInList = $stmt->fetchAll();

        foreach ($characterInList as $char) {
            $character = new Character();
            $character->id = $char["id"];
            $character->name = $char["name"];
            $character->image = $char["image"];

            $characterList[] = $character;
        }

        return $characterList;
    }
    public function getDataPlayer2()
    { // Busca o Id, nome e imagem no banco para tela do player
        $characterList = [];

        $stmt = $this->conn->prepare("SELECT * FROM player2");

        $stmt->execute();

        $characterInList = $stmt->fetchAll();

        foreach ($characterInList as $char) {
            $character = new Character();
            $character->id = $char["id"];
            $character->name = $char["name"];
            $character->image = $char["image"];

            $characterList[] = $character;
        }

        return $characterList;
    }
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function buildCharacter(Character $char)
    {
        $character = new Character();

        $character->id = $char->id;
        $character->name = $char->name;
        $character->image = $char->image;
        $character->selected = $char->selected;

        return $character;
    }

    public function setChosenCharacter(Character $char)
    { // Seta o personagem escolhido
        $clean = $this->conn->prepare("UPDATE player1 SET selectedPlayer1 = 0");

        $clean->execute();

        $stmt = $this->conn->prepare("UPDATE player1 SET selectedPlayer1 = 1 WHERE id = :id");

        $stmt->bindParam(":id", $char->id);

        $stmt->execute();
    }
    public function setChosenCharacterPlayerTwo(Character $char)
    { // Seta o personagem escolhido
        $clean = $this->conn->prepare("UPDATE player2 SET selectedPlayer2 = 0");

        $clean->execute();

        $stmt = $this->conn->prepare("UPDATE player2 SET selectedPlayer2 = 1 WHERE id = :id");

        $stmt->bindParam(":id", $char->id);

        $stmt->execute();
    }

    public function bringChosenCharacter()
    {
        $selectedCharacter = new Character();

        $stmt = $this->conn->prepare("SELECT * FROM player1 WHERE selectedPlayer1 = 1");

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch();

            $selectedCharacter->id = $result["id"];
            $selectedCharacter->name = $result["name"];
            $selectedCharacter->image = $result["image"];

            return $selectedCharacter;
        }
    }
    public function bringChosenCharacterPlayerTwo()
    {
        $selectedCharacter = new Character();

        $stmt = $this->conn->prepare("SELECT * FROM player2 WHERE selectedPlayer2 = 1");

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $result = $stmt->fetch();

            $selectedCharacter->id = $result["id"];
            $selectedCharacter->name = $result["name"];
            $selectedCharacter->image = $result["image"];

            return $selectedCharacter;
        }
    }

    public function hideChar(Character $char)
    { // Esconde o personagem
        $stmt = $this->conn->prepare("DELETE FROM player1 WHERE id = :id");

        $stmt->bindParam(":id", $char->id);

        $stmt->execute();
    }
    public function hideCharPlayer2(Character $char)
    { // Esconde o personagem
        $stmt = $this->conn->prepare("DELETE FROM player2 WHERE id = :id");

        $stmt->bindParam(":id", $char->id);

        $stmt->execute();
    }
    
    public function resetGame()
    {
        $stmt = $this->conn->prepare("-- Limpa a tabela
            DELETE FROM player1;

            -- Reinicia o contador de IDs
            ALTER TABLE player1 AUTO_INCREMENT = 1;

            -- Insere os personagens com nomes e imagens
            INSERT INTO player1 (name, image) VALUES
            ('Michael Scott', 'michael.png'),
            ('Dwight Schrute', 'dwight.webp'),
            ('Jim Halpert', 'jim.jpg'),
            ('Pam Beesly', 'pam.jpg'),
            ('Ryan Howard', 'ryan.jpg'), -- imagem fictícia
            ('Andy Bernard', 'andy.webp'),
            ('Robert California', 'robert.jpg'),
            ('Stanley Hudson', 'stanley.webp'),
            ('Kevin Malone', 'kevin.webp'),
            ('Meredith Palmer', 'meredith.webp'),
            ('Angela Martin', 'angela.jpg'),
            ('Oscar Martinez', 'oscar.jpg'),
            ('Phyllis Vance', 'phyllis.webp'),
            ('Toby Flenderson', 'toby.webp'),
            ('Kelly Kapoor', 'kelly.webp'),
            ('Creed Bratton', 'creed.webp'),
            ('Darryl Philbin', 'darryl.webp'),
            ('Roy Anderson', 'roy.webp'),
            ('Jan Levinson', 'jan.webp'),
            ('Holly Flax', 'holly.jpg'),
            ('Erin Hannon', 'erin.webp'),
            ('Gabe Lewis', 'gabe.webp'),
            ('Nellie Bertram', 'nellie.webp'),
            ('Clark Green', 'clark.webp'),
            ('Pete Miller', 'pete.webp');

            -- Limpa a tabela
            DELETE FROM player2;

            -- Reinicia o contador de IDs
            ALTER TABLE player2 AUTO_INCREMENT = 1;

            -- Insere os personagens com nomes e imagens
            INSERT INTO player2 (name, image) VALUES
            ('Michael Scott', 'michael.png'),
            ('Dwight Schrute', 'dwight.webp'),
            ('Jim Halpert', 'jim.jpg'),
            ('Pam Beesly', 'pam.jpg'),
            ('Ryan Howard', 'ryan.jpg'), -- imagem fictícia
            ('Andy Bernard', 'andy.webp'),
            ('Robert California', 'robert.jpg'),
            ('Stanley Hudson', 'stanley.webp'),
            ('Kevin Malone', 'kevin.webp'),
            ('Meredith Palmer', 'meredith.webp'),
            ('Angela Martin', 'angela.jpg'),
            ('Oscar Martinez', 'oscar.jpg'),
            ('Phyllis Vance', 'phyllis.webp'),
            ('Toby Flenderson', 'toby.webp'),
            ('Kelly Kapoor', 'kelly.webp'),
            ('Creed Bratton', 'creed.webp'),
            ('Darryl Philbin', 'darryl.webp'),
            ('Roy Anderson', 'roy.webp'),
            ('Jan Levinson', 'jan.webp'),
            ('Holly Flax', 'holly.jpg'),
            ('Erin Hannon', 'erin.webp'),
            ('Gabe Lewis', 'gabe.webp'),
            ('Nellie Bertram', 'nellie.webp'),
            ('Clark Green', 'clark.webp'),
            ('Pete Miller', 'pete.webp');

            ");

        $stmt->execute();
    }

}