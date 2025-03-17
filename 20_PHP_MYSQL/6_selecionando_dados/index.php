<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cursophp";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

$pesquisa = "SELECT * FROM games";

$result = $conn->query($pesquisa);

//Um resultado
$game = $result->fetch_assoc();

//Todos os resultados

$games = $result->fetch_all();

print_r($games);

$conn->close();