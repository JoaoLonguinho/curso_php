<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cursophp";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

$id = 2;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");

$stmt->bind_param("i", $id); // i = inteiro

$stmt->execute();

$result = $stmt->get_result();

$data = $result->fetch_row();

print_r($data);

$conn->close();