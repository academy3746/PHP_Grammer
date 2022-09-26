<?php
$a = 5;

echo "<h2>Increment Operator</h2>";
echo "<hr>";
echo "++a is ".++$a ."<br>";
// +1 연산 후 참조: 6
echo "--a is ".--$a ."<br>";
// -1 연산 후 참조: 5
echo "a++ is ".$a++ ."<br>";
// 참조 후 +1 연산: 5 (+1)
echo "a-- is ".$a-- ."<br>";
// 참조 후 -1 연산: 6 (-1)
echo $a;
// result: 5