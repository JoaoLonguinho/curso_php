<?php

$dbhost = "localhost";
$dbname = "cursophp";
$dbuser = "root";
$dbpass = "";

$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

$stmt = $conn->prepare("UPDATE games SET ano_lancamento = :ano_lancamento WHERE nome = :nome");

$nomeJogo = "Subnautica";
$anoLancamento = 2014;

$stmt->bindParam(":ano_lancamento", $anoLancamento);
$stmt->bindParam(":nome", $nomeJogo);

$stmt->execute();