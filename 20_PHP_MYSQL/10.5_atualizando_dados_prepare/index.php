<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cursophp";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

$nome = "Crash Team Racing";
$id = 3;

$nomeAntigo = "Cyberpunk 2077";
$idAntigo = 4;
$generoAntigo = "RPG";
$anoLancamentoAntigo = 2020;

$stmt = $conn->prepare("UPDATE games SET nome = ? WHERE nome = ? AND id = ?");

$stmt->bind_param("ssi", $nome, $nomeAntigo, $idAntigo);

$stmt->execute();

$stmt2 = $conn->prepare("UPDATE games SET genero = ?, ano_lancamento = ? WHERE nome = ? AND id = ?");

$stmt2->bind_param("sisi", $generoAntigo, $anoLancamentoAntigo, $nomeAntigo, $idAntigo);

$stmt2->execute();

$conn->close();