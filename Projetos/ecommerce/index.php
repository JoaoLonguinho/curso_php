<?php

require_once "templates/header.php";
require_once "model/User.php";
require_once "dao/UserDao.php";
require_once "model/Product.php";
require_once "dao/ProductDao.php";

$user = new User();
$userDao = new UserDao($conn, $BASE_URL);
$product = new Product();
$productDao = new ProductDao($conn, $BASE_URL);

$user = $userDao->getSessionToken();

$productList = $productDao->getAllProducts();

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
            <!-- profile icons -->
            <div class="icons">
                <form action="logout.php" class="forms-profile" method="POST">
                    <input type="hidden" name="type" value="profile">
                    <button type="submit" class="icon-btns">
                        <i class="fa-solid fa-user"></i>
                    </button>
                </form>
                <a href="addproduct.php"><i class="fa-solid fa-plus-minus"></i></a>
                    <a href="cart.php" class="icon-btns">
                        <div class="profile-cart">
                            <i class="fa-solid fa-cart-shopping"></i> 
                            <span>
                                <?php if(!empty($_SESSION["cartItens"])): ?>
                                <?= count($_SESSION["cartItens"]);?>
                                <?php else: ?>
                                0
                                <?php endif; ?>
                            </span>
                        </div>
                    </a>

                <form action="logoutprocess.php" class="forms-profile" method="POST">
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
        <div class="all-products-container">
            <?php foreach ($productList as $product): ?>
                <div class="product-card">
                    <div class="product-img-container">
                        <img src="images/product-placeholder.png" alt="">
                    </div>
                    <div class="product-name">
                        <?= $product->productName ?>
                    </div>
                    <div class="product-description">
                        <?= $product->productDesc ?>
                    </div>
                    <div class="product-price">
                        R$ <?= $product->productPrice ?>
                    </div>
                    <?php if($user): ?>
                    <div class="product-btns">
                        <form action="addtocartprocess.php" method="POST">
                            <input type="hidden" name="cartItens" value="<?= $product->id ?>">
                            <button type="submit"><i class="fa-solid fa-cart-plus"></i></button>
                        </form>
                        <button><i class="fa-solid fa-trash"></i></button>
                    </div>
                    <div class="buy-btn">
                        <button>
                            Compre agora
                        </button>
                    </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</section>