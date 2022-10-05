<?php
interface Band
{
    public function bandName($name);
    // 프로퍼티는 선언 불가!
    // 상수 (__CONSTANT)는 허용!
}

class Rockstar implements Band
// 클래스 {Rockstar}는 인터페이스 {Band}를 상속!
{
    public function bandName($name)
    // 인터페이스에서 정의된 메서드를 강제로 완성시켜야 함!
    // looks like abstract...
    {
        echo "I'm {$name}!";
    }
}
$rockstar = new Rockstar();
$rockstar->bandName("Nirvana");