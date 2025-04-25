<?php

require_once "templates/header.php";
require_once "model/User.php";
require_once "dao/UserDao.php";

$user = new User();
$userDao = new UserDao($conn, $BASE_URL);

$user = $userDao->getSessionToken();

?>

<section class="start-section">
    <section class="profile-section">
        <?php if(empty($user->token)): ?>
        
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
            <a href="addproduct.php"><i class="fa-solid fa-plus-minus"></i></a>
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
        <h1 class="main-page-title">Produtos:</h1>
    <div class="product-card">
        <div class="product-img-container">
            <img src="images/placeholder-product.png" alt="">
        </div>
        <div class="product-name">
            Nome do produto
        </div>
        <div class="product-description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem, quibusdam!
        </div>
        <div class="product-btns">
            <i class="fa-solid fa-cart-plus"></i>
            <i class="fa-solid fa-trash"></i>
        </div>
    </div>
</section>
</section>