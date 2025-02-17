<?php

function countVowels($word){
    $vowels = ["a", "e", "i", "o", "u"];
    $wordToArr = str_split($word); #Array da string
    $vowelCounter = 0;
    for($i = 0; $i < count($wordToArr); $i++){
        for($j = 0; $j < count($vowels); $j++){
            if($wordToArr[$i] == $vowels[$j]){
                $vowelConter++;
            }
        }
    }
    return $vowelCounter;
}

echo countVowels('hoje');

echo countVowels('hoje estudei pra caramba');