<?php
$old_pop = [
    'Led Zeppelin'=>'Hard Rock',
    'Guns N Roses'=>'LA Metal',
    'Nirvana'=>'Grunge',
    'Oasis'=>'British Pop',
    'The Pink Floyd'=>'Progressive Rock',
    'Bob Dylan'=>'Country Rock'
];

$neo_pop = [
    'Green Day'=>'Punk Rock',
    'Slash'=>'Post Grunge',
    'Maroon5'=>'Modern Rock',
    'EVE'=>'Visual Rock',
    'Radio Head'=>'British Pop',
    'Pearl Jam'=>'Grunge'
];

$merge = array_merge($old_pop, $neo_pop); // 서로 다른 배열을 합체
echo "<pre>";
print_r($merge);
echo "</pre>";
echo "<br>";

$intersect = array_intersect($old_pop, $neo_pop); // 서로 다른 배열의 공통 교집합을 필터링
echo "<pre>";
print_r($intersect);
echo "</pre>";
echo "<br>";