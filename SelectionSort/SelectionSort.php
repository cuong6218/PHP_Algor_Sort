<?php
function findMin($arr)
{
    $min = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] < $min) $min = $arr[$i];
    }
    return $min;
}
function sortSelect($arr)
{
    $sortedList = [];
    $lenght = count($arr);
    while ($lenght > 0) {
        $min = findMin($arr);
        array_push($sortedList, $min);
        $key = array_search($min, $arr);
        array_splice($arr, $key, 1);
        $lenght = $lenght - 1;
    }
    return $sortedList;
}

$arr = [1, 9, 4.5, 6.6, 5.7, -4.5];
print_r(sortSelect($arr));
