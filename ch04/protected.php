<?php
class Daddy
// Other declarations of class 'Example' exist at public.php
{
    protected $property = "Hey, ";

    protected function myFunc()
    {
        return "Jude!";
    }
}

$example = new Daddy();

/*
echo $example->property;
echo $example->myFunc();

1. Fatal error: Uncaught Error: Cannot access protected property
2. Protected: 클래스 외부에서는 접근이 제한된다!
2-1) 클래스 내부에서 접근 권한이 허가된다!
2-2) 주 목적은 상속받은 자식 클래스에서 꺼내다가 쓰는 것에 있음..!
**/