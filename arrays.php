<?php

$arr = array(1, 2, 3);

$array1 = array(
    "foo" => "bar",
    "bar" => "foo",
);
var_dump($array1);
echo '<br>';
// Начиная с PHP 5.4

$arr2 = [1, 2, "key" => 3];
$array2 = [
    "foo" => "bar",
    "bar" => "foo",
];
var_dump($array2);
echo '<br>';
$array3 = array(
    "foo" => "foo_foo",
    "bar" => "bar_bar",
    100   => -100,
    -100  => 100,
);
var_dump($array3);
echo '<br>';
$array4 = array("re" => "foo", "bar", "hallo", $array3);
var_dump($array4);
echo '<br>';

echo $array4[0];
echo '<br>';
echo $array3['foo'];
echo '<br>';

$array4[] = 'new';
print_r($array4);

echo __LINE__;

$a = (5 + 3) * 2;
