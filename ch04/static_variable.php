<?php
function myFunc()
{
    static $x = 0; // static 키워드를 사용하면 해당 변수는 함수 내에서 소멸되지 않음!
    echo "<p>변수 x의 값: {$x}</p>";
    $x++; // 증감 연산자 +1
}

myFunc(); // 0
myFunc(); // 1
myFunc(); // 2
myFunc(); // 3