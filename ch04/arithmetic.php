<?php
$a = 6;
$b = 3;

$c1 = 0;
$c2 = 0;
$c3 = 0;
$c4 = 0;
$c5 = 0;
$c6 = 0;
$c7 = 0;

$c1 = $a + $b;
$c2 = $a - $b;
$c3 = -$a;
$c4 = $a * $b;
$c5 = $a ** $b; // a^b
$c6 = $a / $b;
$c7 = $a % $b;

echo "<h2>Operator</h2>";
echo "<hr>";
echo "a + b = {$c1}<br>";
echo "a - b = {$c2}<br>";
echo "-a = {$c3}<br>";
echo "a * b = {$c4}<br>";
echo "a ** b = {$c5}<br>";
echo "a / b = {$c6}<br>";
echo "a % b = {$c7}<br>";
