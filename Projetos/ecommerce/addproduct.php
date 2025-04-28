<?php

require_once "templates/header.php";
require_once "model/User.php";
require_once "dao/UserDao.php";


$user = new User();
$userDao = new UserDao($conn, $BASE_URL);

$user = $userDao->getSessionToken();
$userDao->getSessionToken(true); // Faz a página funcionar somente com o login.

?>

<section class="start-section">
    <section class="profile-section">
        <?php if (empty($user->token)): ?>

            <div class="profile-logged-out">
                <p>Fala login para efetuar suas compras</p>
                <a href="login.php">Login</a>
            </div>

        <?php else: ?>
            <div class="profile-img">
                <img src="images/placeholder-profile.png" alt="">
            </div>
            <div class="profile-name">
                <p><?= $user->name ?></p>
            </div>
            <div class="icons">
                <form action="logout.php" method="POST">
                    <input type="hidden" name="type" value="profile">
                    <button type="submit" class="icon-btns">
                        <i class="fa-solid fa-user"></i>
                    </button>
                </form>
                <form action="addproduct.php" method="POST">
                    <input type="hidden" name="type" value="addProduct">
                    <button type="submit" class="icon-btns">
                        <i class="fa-solid fa-plus-minus"></i>
                    </button>
                </form>
                <form action="logout.php" method="POST">
                    <input type="hidden" name="type" value="cart">
                    <button type="submit" class="icon-btns">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </button>
                </form>
                <form action="logoutprocess.php" method="POST">
                    <input type="hidden" name="type" value="logout">
                    <button type="submit" class="icon-btns">
                        <i class="fa-solid fa-door-open"></i>
                    </button>
                </form>
            </div>
        <?php endif; ?>
    </section>
    <section class="product-section">
        <h1 class="main-page-title">Adicionar produtos:</h1>
        <form action="addproductprocess.php" method="POST">
            
            <input type="text" name="productName" id="productName" placeholder="Nome do produto">
            <textarea name="productDesc" id="productDesc" placeholder="Descrição"></textarea>
            <input type="number" name="productPrice" id="productPrice" step="0.01" min="0" placeholder="Preço (R$)">
            <button type="submit">Cadastrar produto</button>
        </form>
    </section>
</section>