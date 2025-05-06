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

?>

<section class="">
    <h2>Preencha os dados de entrega para finalizar sua compra:</h2>
    <form action="createorderprocess.php" method="POST">
        <div class="form-delivery">
            <div class="adressData">
                <label for="cep"><input type="text" name="cep" id="cep" placeholder="CEP"></label>
            </div>
            <div class="adressData">
                <label for="address"><input type="text" name="address" id="address" placeholder="Endereço"></label>
            </div>
            <div class="adressData">
                <label for="houseNumber"><input type="text" name="houseNumber" id="houseNumber"
                        placeholder="Número"></label>
            </div>
            <div class="adressData">
                <label for="adressComplement"><input type="text" name="complement" id="complement"
                        placeholder="Complemento"></label>
            </div>
            <div class="adressData">
                <label for="neighborhood"><input type="text" name="neighborhood" id="neighborhood"
                        placeholder="Bairro"></label>
            </div>
            <div class="adressData">
                <label for="city"><input type="text" name="city" id="city"
                        placeholder="Cidade"></label>
            </div>
            <div class="adressData">
                <label for="uf"><input type="text" name="UF" id="uf"
                        placeholder="UF"></label>
            </div>
            <div class="form-btn-container">
                <button type="submit">Continuar</button>
            </div>
        </div>
    </form>
</section>

<?php 

require_once "templates/footer.php";

?>