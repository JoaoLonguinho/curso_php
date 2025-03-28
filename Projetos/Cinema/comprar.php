<?php
    include_once("templates/header.php");
    $_SESSION["movie"] = $result["name"];
    $_SESSION["category"] = $result["category"];
    $_SESSION["classificacao_indicativa"] = $result["classificacao_indicativa"];
    $_SESSION["sinopse"] = $result["sinopse"];

    if(isset($_GET["popcornS"])){
         $_SESSION["popcorn"] = $_GET["popcornS"];
    }
    else{
        $_SESSION["popcorn"] = "Não quero pipoca";
    }
    
?>

<section class="cart">
    <ul>Carrinho:</ul>
        <li>Filme: <?= $_SESSION["movie"]?></li>
        <?php if(isset($_GET["popcornS"])): ?>
        <li>Pipoca: <?= $_SESSION["popcorn"]?></li>
        <?php endif; ?>
</section>
<section class="selected-movie">
    <?php if(isset($_GET["popcornS"]) && $_GET["popcornS"] != "Não quero pipoca"):?>
        <div><h4 class="alert-msg">Pipoca "<?= $_SESSION["popcorn"] ?>" adicionada ao carrinho</h4></div>
    <?php endif ?>
    <h1 class=""><?=$result["name"]?></h1>

    <div class="buy-container">
        <div class="movie-img-container">
            <img src="<?= $BASE_URL?>img/filme-<?=$result["id"]?>.jpg" alt="<?=$result["name"]?>">
        </div>
        <div class="info-popcorn-container">
            <div class="movie-description-buy">
                <h2><?=$result["name"]?></h2>
                <h3>Categoria: <?=$result["category"]?></h3>
                <p>Sinopse: <?=$result["sinopse"]?></p>
            </div>
            <div class="popcorn">
                Deseja comprar pipoca?
                <div class="popcorn-container">
                    <div class="popcorn-option">
                        <div class="popcorn-pic">
                            <img src="<?= $BASE_URL?>img/pipoca.webp" alt="" width="100">
                        </div>
                        <div>
                            <h4>Pipoca pequena</h4>
                            <p>R$ 20,00</p>
                            <form action="<?= $BASE_URL ?>comprar.php" method="GET">
                                <input type="hidden" name="id" value="<?=$result["id"]?>">
                                <input type="hidden" name="popcornS" value="P">
                                <button type="submit" class="pop-btn">+</button>
                            </form>
                        </div>
                    </div>
                    <div class="popcorn-option">
                        <div class="popcorn-pic">
                            <img src="<?= $BASE_URL?>img/pipoca.webp" alt="" width="100">
                        </div>
                        <div>
                            <h4>Pipoca media</h4>
                            <p>R$ 30,00</p>
                            <form action="<?= $BASE_URL ?>comprar.php" method="GET">
                                <input type="hidden" name="id" value="<?=$result["id"]?>">
                                <input type="hidden" name="popcornS" value="M">
                                <button type="submit" class="pop-btn">+</button>
                            </form>
                        </div>
                    </div>
                    <div class="popcorn-option">
                        <div class="popcorn-pic">
                            <img src="<?= $BASE_URL?>img/pipoca.webp" alt="" width="100">
                        </div>
                        <div>
                            <h4>Pipoca grande</h4>
                            <p>R$ 40,00</p>
                            <form action="<?= $BASE_URL ?>comprar.php" method="GET">
                                <input type="hidden" name="id" value="<?=$result["id"]?>">
                                <input type="hidden" name="popcornS" value="G">
                                <button type="submit" class="pop-btn">+</button>
                            </form>
                        </div>
                    </div>
                    <div class="popcorn-option">
                        <div>
                            <form action="<?= $BASE_URL ?>comprar.php" method="GET">
                                <input type="hidden" name="id" value="<?=$result["id"]?>">
                                <input type="hidden" name="popcornS" value="Não quero pipoca">
                                <button type="submit" class="pop-btn">Não quero pipoca</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="follow-buy">
                <form action="chairs.php?id=<?=$result["id"]?>?<?=$_SESSION["popcorn"]?>" method="GET">
                    <input type="hidden" name="id" value="<?=$result["id"]?>">
                    <input type="hidden" name="popcornS" value="<?=$_SESSION["popcorn"]?>">
                    <button type="submit">Selecionar lugar</button>
                </form>
            </div>
        </div>
    </div>
</section>