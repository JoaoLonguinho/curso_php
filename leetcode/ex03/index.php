<?php

function isPalindrome($x) {
        $nSeparated = str_split($x);
        $numberReverseArr = array_reverse($nSeparated);
        $numberReverseFormated = implode("", $numberReverseArr);
        $numberAsNumber = intval($numberReverseFormated);
        if($x === $numberAsNumber){
            return true;
        }
        else{
            return false;
        }
}

echo isPalindrome(93);
echo isPalindrome(101);
echo isPalindrome(22);