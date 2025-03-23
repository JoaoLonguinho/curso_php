<?php
    include_once("templates/header.php");
    if(isset($_POST["selectedChairs"])){
        $_SESSION["lugares"] = $_POST["selectedChairs"];
    }
?>

<!-- <section class="cart">
    <ul>Carrinho:</ul>
        <li>Filme: <?= $_SESSION["movie"]?></li>
        <li>Pipoca: <?= $_SESSION["popcorn"]?></li>
        <li>Lugares: 
        <?php foreach($_SESSION["lugares"] as $chairs):?>
            <?= $chairs?>,
        <?php endforeach; ?>
        </li>
</section> -->
<h1 class="main-title">Imprima seu ingresso:</h1>
    <div class="ticket">
        <div >
            <h2>Filme: <?= $_SESSION["movie"]?></h2>
            <p> Assentos: 
                <?php foreach($_SESSION["lugares"] as $chairs):?>
                <span><?= $chairs ?>, </span>
                <?php endforeach; ?>
            </p>
        </div>
    </div>
    <div class="link-home">
        <a class="link-go-back" href="index.php">Voltar a página de filmes</a>
    </div>
</section>