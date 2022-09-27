<?php
$arr1 = array(
    "1" => "Apple",
    "2" => "Melon"
);

$arr2 = array(
    "1" => "Grape",
    "2" => "Banana",
    "3" => "Strawberry"
);

$result1 = $arr1 + $arr2;
print_r($result1);

echo "<br><br>";

$result2 = $arr2 + $arr1;
print_r($result1);