<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "aaa";
$dbname = "cursophp";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if($conn->connect_errno){
    echo "conexão com erro <br/>";
    echo "Erro: " . mysqli_connect_error() . "<br/>"; // Procedural 
    echo "Erro: " . $conn->connect_error . "<br/>"; // Orientado a objetos 
}