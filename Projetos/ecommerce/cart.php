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

$total = 0;
if ($productList != false) {
    
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
    foreach ($productsFound as $item){
        $productItem = $item["product"];
        $quantity = $item["quantity"];
        $subtotal = $productItem->productPrice * $quantity;
        $total += $subtotal;
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
        <div class="cart-products-container">
            <?php if ($productList != false): ?>
                <?php foreach ($productsFound as $item):
                    $productItem = $item["product"];
                    $quantity = $item["quantity"];
                    ?>
                    <div class="product-in-cart">
                        <div class="product-in-cart-img-container">
                            <img src="images/product-placeholder.png" alt="">
                        </div>
                        <div class="product-name-in-cart">Produto: <?= $productItem->productName ?></div>
                        <div class="product-price-sum">R$
                            <?= number_format($productItem->productPrice * $quantity, 2, ',', '.') ?></div>
                        <div class="product-type-quantity">
                            <div>
                                <form action="addtocartprocess.php" method="POST">
                                    <input type="hidden" name="type" value="increaseCart">
                                    <input type="hidden" name="productId" value="<?= $productItem->id ?>">
                                    <button type="submit"> <i class="fa-solid fa-arrow-up"></i> </button>
                                </form>
                            </div>
                            <h2>Quantidade: <?= $quantity ?></h2>
                            <div>
                                <form action="addtocartprocess.php" method="POST">
                                    <input type="hidden" name="type" value="decreaseCart">
                                    <input type="hidden" name="productId" value="<?= $productItem->id ?>">
                                    <button type="submit"> <i class="fa-solid fa-arrow-down"></i> </button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="total">
                    <h2>Total: R$ <?= $total ?></h2>
                </div>
                <div class="finish">
                    <form action="finalize-purchase.php" method="POST">
                        <button type="submit">Finalizar compra</button>
                    </form>
                </div>
            </div>
        <?php else: ?>
            <div>
                <h1>Você ainda não possuí items em seu carrinho</h1>
                <a href="index.php" class="back-to-buy">Voltar as compras</a>
            </div>
        <?php endif; ?>
    </section>
</section>