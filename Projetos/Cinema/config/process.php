<?php

session_start();
include_once("connection.php");

$id;

if(!empty($_GET)){
    $id = $_GET["id"];

    $query = "SELECT * FROM filmes WHERE id = :id";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

} else {
    $query = "SELECT * FROM filmes";

    $stmt = $conn->prepare($query);
    
    $stmt->execute();
    
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

}

$conn = null;

?>