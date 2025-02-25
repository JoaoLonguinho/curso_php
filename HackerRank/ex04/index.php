<?php

function compareTriplets($a, $b){
    $points = [0,0];
    for($i = 0; $i < 3; $i++){
        if($a[$i] > $b[$i]){
            $points[0] += 1;
        }
        else if($a[$i] < $b[$i]){
            $points[1] += 1;
        }
        else{

        }
    }
    return $points;
}

print_r(compareTriplets([2,3,4], [0,5,2]));