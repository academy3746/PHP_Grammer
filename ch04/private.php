<?php
class Bitch
// 클래스 내부에서만 속성과 함수를 쓸 수 있으면 무슨 쓸모가 있노?
// 상속받을 자식도 없기 때문에 Bitch가 맞다.
{
    private $proerty = "Hey!";

    private function myFunc()
    {
        return "Jude!";
    }
}

$bitch = new Bitch();

/*
echo $bitch->property;
-> Warning: Undefined property: Bitch::$property in ~

echo $bitch->myFunc();
-> Fatal error: Uncaught Error: Call to private method Bitch::myFunc() from global scope in ~
**/