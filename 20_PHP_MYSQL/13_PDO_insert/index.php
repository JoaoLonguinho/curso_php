<?php

$dbhost = "localhost";
$dbname = "cursophp";
$dbuser = "root";
$dbpass = "";

$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

$stmt = $conn->prepare("INSERT INTO games (nome, genero, ano_lancamento) VALUES (:nome, :genero, :ano_lancamento)");

$nomeJogo = "Subnautica";
$genero = "Sobrevivencia";
$anoLancamento = 2024;

$stmt->bindParam(":nome", $nomeJogo);
$stmt->bindParam(":genero", $genero);
$stmt->bindParam(":ano_lancamento", $anoLancamento);

$stmt->execute();
