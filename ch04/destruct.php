<?php
class Exercise
{
    function __construct()
    {
        echo "Initialize this class!<br>";
    }

    public function show(): void
    {
        echo "Hello, PHP!<br>";
    }

    function __destruct()
    {
        echo "Delete this class!<br>";
    }
    // 클래스의 종료 시점에 선언
    // 매개변수를 할당받을 수 없음
}

$exercise = new Exercise();
$exercise->show();