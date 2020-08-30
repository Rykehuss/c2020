<?php

$arr[0] = [1, 2, 3];
$arr[1] = [4, 5, 6, 7];
$arr[2] = [7, 8, 9, 10, 11];

for ($i = 0; $i < count($arr); $i++) {
//    var_dump($arr[$i]);
//    echo "<br>";
    for ($j = 0; $j < count($arr[$i]); $j++) {
        echo $arr[$i][$j] . ' ';
    }
    echo "<br>";
}