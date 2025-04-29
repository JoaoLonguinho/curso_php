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
$userDao->getSessionToken(true); // Faz a página funcionar somente com o login.

$user = $userDao->getSessionToken();

$productList = $product->productsInCart(); 

$productsFound = [];
$quantities = array_count_values($productList); 

foreach ($quantities as $id => $quantity) {
    $productFound = $productDao->getProductsById($id);
    if ($productFound) {
        $productsFound[] = [
            "product" => $productFound,
            "quantity" => $quantity
        ];
    }
}

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
                <form action="cart.php" class="forms-profile" method="POST">
                    <input type="hidden" name="type" value="cart">
                    <button type="submit" class="icon-btns">
                        <div class="profile-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span>
                                <?php if (!empty($_SESSION["cartItens"])): ?>
                                    <?= count($_SESSION["cartItens"]); ?>
                                <?php else: ?>
                                    0
                                <?php endif; ?>
                            </span>
                        </div>
                    </button>
                </form>
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
        <h1 class="main-page-title">Seu carrinho:</h1>
        <div class="all-products-container">
            <?php foreach ($productsFound as $item):
                $productItem = $item["product"];
                $quantity = $item["quantity"];
                ?>
                <div class="product-in-cart">
                    <div class="product-in-cart-img-container">
                        <img src="images/product-placeholder.png" alt="">
                    </div>
                    <div class="product-name-in-cart">Produto: <?= $productItem->productName ?></div>
                    <div class="product-price-sum">R$ <?= number_format($productItem->productPrice * $quantity, 2, ',', '.') ?></div>
                    <div class="product-type-quantity">Quantidade: <?= $quantity ?></div>
                </div>
            <?php endforeach; ?>

        </div>
        <div class="finish">
            <form action="finaliza-purchase" method="POST">
                <button type="submit">Finalizar compra</button>
            </form>
        </div>
    </section>
</section>