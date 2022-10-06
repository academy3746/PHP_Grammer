<?php
$bands = [
    'Hard Rock'=>'White Snake',
    'British Pop'=>'Travis',
    'Neo Punk'=>'Sum41',
    'Classic Rock'=>'The Who',
    'Thrash Metal'=>'Pantera',
    'Glam Rock'=>'The Kiss'
];

$bands02 = $bands;
$bands03 = $bands;

sort($bands); // 배열의 값을 기준으로 오름차순 정렬, 키 초기화
echo "<pre>";
print_r($bands);
echo "</pre>";

rsort($bands); // 배열의 값을 기준으로 내림차순 정렬, 키 초기화
echo "<pre>";
print_r($bands);
echo "</pre>";

ksort($bands02); // 배열의 키를 기준으로 오름차순 정렬, 키 보존
echo "<pre>";
print_r($bands02);
echo "</pre>";

krsort($bands02); // 배열의 키를 기준으로 내림차순 정렬, 키 보존
echo "<pre>";
print_r($bands02);
echo "</pre>";

asort($bands03); // 배열의 값을 기준으로 오름차순 정렬, 키 보존
echo "<pre>";
print_r($bands03);
echo "</pre>";

arsort($bands03); // 배열의 값을 기준으로 내림차순 정렬, 키 보존
echo "<pre>";
print_r($bands03);
echo "</pre>";