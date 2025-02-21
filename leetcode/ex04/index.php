<?php

function longestCommonPrefix($strs){

    $prefix = $strs[0];
    foreach($strs as $item){
        while(strpos($item, $prefix) !== 0){
            $prefix = substr($prefix, 0, -1);
            if(empty($prefix)) return "";
        }
    }
    return $prefix;
}

$arr = ["flower","flow","flight"];

print_r(longestCommonPrefix($arr) . "<br/>");

#Segunda resolução: 

function longestCommonPrefixSecond($strs) {
    if (empty($strs)) return "";

    $prefix = $strs[0];

    foreach ($strs as $item) {
        $itemsArray = explode(" ", $item); 
        
        foreach ($itemsArray as $eachWordInArray) {
            $tempPrefix = "";
            for ($j = 0; $j < min(strlen($eachWordInArray), strlen($prefix)); $j++) {
                if ($eachWordInArray[$j] === $prefix[$j]) {
                    $tempPrefix .= $eachWordInArray[$j];
                } else {
                    break;
                }
            }
            $prefix = $tempPrefix;
            if (empty($prefix)) return ""; 
        }
    }
    
    return $prefix;
}

$words = ["florida", "flow", "flight"];
echo longestCommonPrefixSecond($words); 
