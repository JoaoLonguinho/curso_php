<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cursophp";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
#Criação abaixo
// $criarTabela = "CREATE TABLE pecas(
//     id INT AUTO_INCREMENT NOT NULL UNIQUE,
//     nome VARCHAR (200) 
// )";

// $conn->query($criarTabela);


#Remoção abaixo
$deletarTabela = "DROP TABLE pecas";
$conn->query($deletarTabela);

$conn->close();