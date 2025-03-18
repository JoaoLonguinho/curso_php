<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cursophp";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Medida de segurança

$nomeJogo = "Grand Chase";

$stmt = $conn->prepare("INSERT INTO games (nome) VALUES (?)"); // o ? dentro do parenteses representa o bind_param da linha abaixo.

$stmt->bind_param("s", $nomeJogo); // s - String - $nomeJogo a variavel que entratá no lugar do ? da linha acima

$stmt->execute();

$conn->close();