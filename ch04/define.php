<?php
define("CONSTANT", "Hello!");

function myFunc()
{
    define('MESSAGE', '저는 PHP를 공부합니다!');
}

myFunc();

echo CONSTANT;
echo MESSAGE;

// 상수는 기본적으로 메서드의 내부, 외부 모두에서 선언하여 쓸 수 있다.
// Sounds like global..