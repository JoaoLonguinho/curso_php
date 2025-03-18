<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cursophp";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

$nome = "Marta";

$stmt = $conn->prepare("INSERT INTO itens (nome) VALUES (?)");

$stmt->bind_param("s", $nome);

$stmt->execute();

$conn->close();