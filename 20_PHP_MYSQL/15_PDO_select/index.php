<?php

$dbhost = "localhost";
$dbname = "cursophp";
$dbuser = "root";
$dbpass = "";

$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);

$stmt = $conn->prepare("SELECT * FROM games");

$result = $stmt->execute();

$oneResult = $stmt->fetch(PDO::FETCH_ASSOC);

print_r($oneResult);

echo "<br/>";

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($result);