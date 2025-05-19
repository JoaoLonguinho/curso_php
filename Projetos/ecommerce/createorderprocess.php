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

$cep = filter_input(INPUT_POST, 'cep');
$address = filter_input(INPUT_POST, 'address');
$houseNumber = filter_input(INPUT_POST, 'houseNumber');
$complement = filter_input(INPUT_POST, 'complement');
$neighborhood = filter_input(INPUT_POST, 'neighborhood');
$city = filter_input(INPUT_POST, 'city');
$uf = filter_input(INPUT_POST, 'uf');

$productList = $product->productsInCart();

$total = 0;
$productsFound = [];

if ($productList != false) {
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

    foreach ($productsFound as $item) {
        $productItem = $item["product"];
        $quantity = $item["quantity"];
        $subtotal = $productItem->productPrice * $quantity;
        $total += $subtotal;
    }
}


?>

<section>
    <h1>Resumo da compra:</h1>
    <?php foreach ($productsFound as $item):
        $productItem = $item["product"];
        $quantity = $item["quantity"]; ?>
        <div class="itens-to-buy">
            <h2><?= $productItem->productName ?></h2>
            <p><?= $productItem->productDesc ?></p>
            <p>R$ <?= $productItem->productPrice ?></p>
            <p>Quantidade: <?= $quantity ?></p>
        </div>
    <?php endforeach; ?>
</section>