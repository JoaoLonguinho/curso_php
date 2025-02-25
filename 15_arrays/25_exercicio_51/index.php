<?php

$jogos = [
    "Dark souls" => 100.00,
    "Red dead redemption 2" => 143.90,
    "Unravel 2" => 35.70
];

asort($jogos);

?>
<h2>
    Jogos mais baratos para os mais caros:
</h2>
<ol> 
    <?php
        foreach($jogos as $item => $value){
            echo "<li> $item - R$ $value";
        }
    ?>
</ol>