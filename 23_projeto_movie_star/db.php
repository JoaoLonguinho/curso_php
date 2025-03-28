<?php
    $dbhost = "localhost";
    $dbname = "moviestar";
    $dbuser = "root";
    $dbpassword = "";

    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpassword);

    // Erros PDO:

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);