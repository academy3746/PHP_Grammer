<?php
class Test
{
    public readonly string $str;
    // readonly 타입으로 선언된 프로퍼티는 단 한 번만 초기화 가능!
    // 추가로 재정의해서 쓸 수 없음!

    public function say(string $str)
    {
        $this->say = $str;
    }
}
$str = "Hello, world!";
$test = new Test();

$test->say(str: $str);
$test->say(str: "Hello, PHP!");