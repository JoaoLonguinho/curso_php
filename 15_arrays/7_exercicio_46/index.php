<?php
#Minha resolução:
$arr = [
    [0, 3, 10, 9],
    [5, 2, 5, 22],
    [43, 9, 12, 89]
];

for($i = 0; $i < count($arr); $i++){
    echo "<br/> Imprimindo array externo: " . ($i + 1) . "<br/>";
    print_r($arr[$i]);
}

echo "<br/>";

#Professor: 

$arrP = [
    [0, 3, 10, 9],
    [5, 2, 5, 22],
    [43, 9, 12, 89]
];

for($i = 0; $i<count($arrP); $i++){
    echo "<br/> Imprimindo array externo: " . ($i + 1) . "<br/>";
    for($j = 0; $j < count($arrP[$i]); $j++){
        echo $arr[$i][$j] . "<br/>";
    }
}