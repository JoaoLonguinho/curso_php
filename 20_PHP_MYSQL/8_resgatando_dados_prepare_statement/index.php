<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cursophp";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

$nomeJogo = "Crash Team Racing";

$stmt = $conn->prepare("SELECT * FROM games WHERE nome = ?");

$stmt->bind_param("s", $nomeJogo);

$stmt->execute();

$result = $stmt->get_result();

$data = $result->fetch_all();

print_r($data);

$conn->close();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($data[0] as $item): ?>
            <li> <?= $item ?> </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>