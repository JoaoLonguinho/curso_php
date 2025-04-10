<?php

$dbhost = "localhost";
$dbname = "gamebox";
$dbuser = "root";
$dbpass = "";

$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
