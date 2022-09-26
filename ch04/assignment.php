<?php
$a = 5;
$b = 3;

$r1 = 10;
$r2 = 10;
$r3 = 10;
$r4 = 10;
$r5 = 10;
$r6 = 10;
$r7 = 10;

$r1 = $a;
$r2 += $a;
$r3 -= $a;
$r4 *= $a;
$r5 /= $a;
$r6 %= $a;
$r7 .= $a;

echo "<h2>대입연산자 & 복합연산자</h2>";
echo "<hr>";
echo "r1 = a 는 {$r1} 입니다. <br>"; // Returns 5
echo "r2 += a 는 {$r2} 입니다. <br>"; // Returns 15
echo "r3 -= a 는 {$r3} 입니다. <br>"; // Returns 5
echo "r4 *= a 는 {$r4} 입니다. <br>"; // Returns 50
echo "r5 /= a 는 {$r5} 입니다. <br>"; // Returns 2
echo "r6 %/ a 는 {$r6} 입니다. <br>"; // Returns 0
echo "r7 .= a 는 {$r7} 입니다. <br>"; // Returns 105
# (.): 문자열 결합