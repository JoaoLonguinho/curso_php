<?php

function longestCommonPrefix($strs) {
    $equalParts = [];
    foreach($strs as $item){
        $itemsArray = explode(" ", $item); #Separa em array
        for($i = 0; $i < count($itemsArray); $i++){
            $eachWordInArray = $itemsArray[$i];
            for($j = 0; $j < strlen($eachWordInArray); $j++){
                for($k = 0; $k < strlen($eachWordInArray); $k++){
                    if($eachWordInArray[$j] === $eachWordInArray[$k]){
                        array_push($equalParts, $eachWordInArray[$j], $eachWordInArray[$k]);
                    }
                }
            }
        }
    }
    return $equalParts;
}

print_r(longestCommonPrefix(["flower","flow","flight"]));