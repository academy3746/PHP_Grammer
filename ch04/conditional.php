<?php
$str1 = "Hello, world!";
$str2 = "Hello, PHP!";

$result1 = $str1 ?? $str2; // Null 병합 연산자 수행
# Null 값이 아닐 경우 첫 번째 피연산자 반환!
# Null 값일 경우 두 번째 피연산자 반환!
echo $result1; // returns $str1
echo "<br>";


$str1 = "Hello, world!";
$str2 = null;

$result2 = $str1 ?? $str2; // Null 병합 연산자 수행
# Null 값이 아닐 경우 첫 번째 피연산자 반환!
# Null 값일 경우 두 번째 피연산자 반환!
echo $result2; // returns $str1
echo "<br>";


$str1 = null;
$str2 = "Hello, PHP!";

$result3 = $str1 ?? $str2; // Null 병합 연산자 수행
# Null 값이 아닐 경우 첫 번째 피연산자 반환!
# Null 값일 경우 두 번째 피연산자 반환!
echo $result3; // returns $str2
echo "<hr>";
