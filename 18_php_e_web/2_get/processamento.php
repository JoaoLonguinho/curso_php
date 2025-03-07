<?php

if(isset($_GET['nome'])){
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
}
else{
    $nome = 'Sem dados';
    $idade = 'Sem dados';
}

?>

<h1>O seu nome é <?= $nome ?> e você tem <?= $idade ?> anos de idade.</h1>