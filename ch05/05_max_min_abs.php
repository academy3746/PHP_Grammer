<?php
$a = 69;
$b = 74;
$c = 6974;
$d = 5882;

$numbers = [$a, $b, $c, $d];

echo "Min: ".min($a, $b, $c, $d)."<br>";
// 매개변수 $numbers 사용불가
echo "Min: ".min(value: $numbers)."<br><hr>";

echo "Max: ".max($a, $b, $c, $d)."<br>";
// 매개변수 $numbers 사용불가
echo "Max: ".max(value: $numbers)."<br><hr>";

echo "절대값: ".abs(-10)."<br>";
echo "절대값: ".abs(10)."<br>";
