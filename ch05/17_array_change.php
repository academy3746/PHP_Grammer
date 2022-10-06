<?php
$lang = [
    "PHP",
    "Java",
    "C++",
    "Python",
    "JavaScript",
    "SQL"
];

$filter = array_filter($lang, function ($val)
    // function ($val) {}: Anonymous method
{
    if(strlen($val) <= 4) { // 문자열의 길이가 4 이하인 리스트만 출력
        return true;
    }else {
        return false;
    }
});

echo "<pre>";
print_r($filter);
echo "</pre>";
echo "<br>";


$map = array_map(function ($val)
{
    return strtoupper($val);
}, $lang);
// 멤버변수 $lang 의 리스트를 모두 대문자 문자열로 변환
echo "<pre>";
print_r($map);
echo "</pre>";
echo "<br>";


$reduce = array_reduce($lang, function ($carry, $item)
{
    $len = strlen($item);
    return $carry + $len;
},0);

echo "<pre>";
print_r($reduce);
echo "</pre>";

