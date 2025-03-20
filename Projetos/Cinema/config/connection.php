<?php
    $dbhost = "localhost";
    $dbname = "cinema";
    $dbuser = "root";
    $dbpass = "";

    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
?>