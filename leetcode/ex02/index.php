<?php

function mergeTwoLists($list1, $list2) {
        $mergedList = array_merge($list1, $list2);
        sort($mergedList);
        return $mergedList;
};


print_r(mergeTwoLists([1,2,4], [1,3,4]));
print_r(mergeTwoLists([], []));
print_r(mergeTwoLists([], [0]));
