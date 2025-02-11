<?php
    include_once "backend.php";    
?>


<h1>Seja bem vindo ao meu site!</h1>
<p>Ate o momento , possuímos os seguintes produtos em estoques:</p>

<ul>
    <?php foreach($comidas as $item): ?>
        <li> <?= $item; ?></li>
    <?php endforeach; ?>
    
</ul>
<footer>Desenvolvido por <?= $nome; ?> </footer>