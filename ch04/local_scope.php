<?php
function myFunc(){
    $str = "PHP";
    echo "<p>변수 str의 값은: {$str}</p>";
}

myFunc();
//echo "<p>변수 str의 값은: {$str}</p>";
// Warning: Undefined variable $str in D:\7) Progamming\5) Gnuwiz Class\codeotaku\myapp\ch04\local_scope.php on line 8
// 로컬 변수: 해당 메서드 내부에서만 엑세스가 가능한 점 유의!