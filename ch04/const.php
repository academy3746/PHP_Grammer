<?php
const CONSTANT = '안녕하세요!';

function myFunc()
{
//    const MESSAGE = '저는 PHP를 공부합니다!';
//    -> Constants defined using the 'const' keyword must be declared at the top-level scope
}

//myFunc();

class MyClass
{
    public const MESSAGE = '저는 PHP를 공부합니다!';

    public static function foo(){
//        const BYE = 'Good-Bye!';
//        -> Constants defined using the 'const' keyword must be declared at the top-level scope
    }
}

echo CONSTANT;
echo MyClass::MESSAGE;
//echo MESSAGE;