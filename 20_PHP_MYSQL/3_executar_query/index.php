<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cursophp";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

$sqlquery = "SELECT * FROM games";

$result = $conn->query($sqlquery);
print_r($result);

$conn->close();