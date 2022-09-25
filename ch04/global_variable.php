<?php
$str = "PHP";

function myFunc()
{
    global $str; // global 키워드를 사용하면 글로벌 변수를 메서드 내부에서 접근할 수 있음!
    echo "<p>변수 str의 값은: {$str}</p>";
}

myFunc();
echo "<p>변수 str의 값은: {$str}</p>";
// 메서드 내부_외부 모두 접근 가능해짐!
