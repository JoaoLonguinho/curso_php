<?php

    //Arquivos que não existem
    //include_once "teste.php";
    include_once "teste2.php"; #Inclui o arquivo apenas uma vez, evitando que sejam exibidas as mesmas informações varias vezes
    include_once "teste2.php";

    require_once "teste2.php";
    require_once "teste2.php";

    
?>

<p>Testando código 
    <? 
    echo "teste"; 
    ?>
</p>