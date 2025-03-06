<?php

$dataA = new DateTime();
$dataB = new DateTime();

$dataB->setDate(2009, 05, 12);

if($dataB > $dataA){
    echo "A segunda Data é maior que a primeira";
}
else{
    echo "A primeira é maior que a segunda";
}