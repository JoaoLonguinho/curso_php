<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cursophp";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

$table = "games";
$nome = "Crash Team Racing";
$genero = "Corrida";
$ano_lancamento = 1999;


$q = "INSERT INTO $table (nome, genero, ano_lancamento) VALUES ('$nome', '$genero', '$ano_lancamento')";

$conn->query($q);

$conn->close();