<?php

function addTwoNumbers($l1, $l2) {
    
    if($l1 != 0 || $l2 != 0){
        $arr1Reverse = array_reverse($l1);
        $arr1Joined = implode('', $arr1Reverse);
        $arr2Reverse = array_reverse($l2);
        $arr2Joined = implode('', $arr2Reverse);
        $result = $arr1Joined + $arr2Joined;
        $resultArray = array_map('intval', str_split((string) $result));
        $finalResult = array_reverse($resultArray);
        return $finalResult;
    }
    
    if($l1 === 0 || $l2 === 0){
        return 0;
    }

}

 print_r(addTwoNumbers([2,4,3], [5,6,4]));
 echo "<br/>";
 print_r(addTwoNumbers([0], [0]));
 echo "<br/>";
 print_r(addTwoNumbers([9,9,9,9,9,9,9], [9,9,9,9]));
 echo "<br/>";