<?php
$str = "PHP";

//function myFunc()
//{
//    echo "<p>변수 str의 값은: {$str}</p>";
//}

// Warning: Undefined variable $str in D:\7) Progamming\5) Gnuwiz Class\codeotaku\myapp\ch04\global_scope.php on line 6
// 메서드 외부에서 선언된 변수는 내부에서 사용 불가!

myFunc();
echo "<p>변수 str의 값은: {$str}</p>";
// 메서드 외부에서 선언됟 변수는 외부에서 사용할 수 있음!
