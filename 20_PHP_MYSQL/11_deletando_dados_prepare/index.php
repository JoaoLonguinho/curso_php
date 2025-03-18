<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cursophp";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

$nomeJogo = "Cyberpunk 2077";

$stmt = $conn->prepare("DELETE FROM games WHERE nome = ?");

$stmt->bind_param("s", $nomeJogo);

$stmt->execute();

$conn->close();