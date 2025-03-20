<?php
    include_once("templates/header.php");
    $_SESSION["movie"] = $result["name"];
    if(isset($_GET["popcornS"])){
         $_SESSION["popcorn"] = $_GET["popcornS"];
    }
    else{
        $_SESSION["popcorn"] = "";
    }
    
?>

<section class="cart">
    <ul>Carrinho:</ul>
        <li>Filme: <?= $_SESSION["movie"]?></li>
        <li>Pipoca: <?= $_SESSION["popcorn"]?></li>
</section>