<?php
$a = 6;
$b = 3;

echo "<h2>Comparison</h2>";
echo "<h3>결과 값이 참일 때는 1, 거짓일 때는 아무 것도 반환하지 않는다.</h3>";
echo "<hr>";
echo "a < b는 ". ($a < $b) . "입니다.<br>"; // Returns False
echo "a <= b는 ". ($a <= $b). "입니다.<br>"; // Returns False
echo "a > b는 ". ($a > $b). "입니다.<br>"; // Returns True
echo "a >= b는 ". ($a >= $b). "입니다.<br>"; // Returns True
echo "a != b는 ". ($a != $b). "입니다.<br>"; // Returns True
echo "a <> b는 ". ($a <> $b). "입니다.<br>"; // Returns True
echo "a !== b는 ". ($a !== $b). "입니다.<br>"; // Returns True
# (a !== b) 데이터타입이 다르거나 OR 각 변수 값이 같지 않을 때 True 반환
echo "a == b는 ". ($a == $b). "입니다.<br>"; // Returns False
echo "a === b는 ". ($a === $b). "입니다.<br>"; // Returns False
# (a === b) 데이터타입이 같고 AND 각 변수 값이 같을 때 True 반환