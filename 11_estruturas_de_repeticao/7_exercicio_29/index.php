<?php

$arr = [10,20,30,40,50,60,70,80,90,100];
$arrIndex = 0;

while($arrIndex < count($arr)){
    if($arr[$arrIndex] === 30 || $arr[$arrIndex] === 40){
        echo "valor: " . $arr[$arrIndex] . " ,instrução pulada <br/>";
        $arrIndex++;
        continue;
    }
    echo $arr[$arrIndex] . "<br/>";
    $arrIndex++;
}