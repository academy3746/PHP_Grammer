<?php
$str = "https://www.github.com/academy3746";

echo "<h3>[문자열 검색 함수]</h3>";
$result = str_contains($str,"github");
// $result 변수에서 문자열 'github' 가 존재하는지 검색할 것!
echo "[github]: ".$result."<hr>";

echo "<h3>[문자열의 첫 시작이 해당 문자열인지 검색할 것!]</h3>";
$result02 = str_starts_with($str,"https");
echo "[https]: ".$result02."<hr>";

echo "<h3>[문자열의 마지막이 해당 문자열인지 검색할 것!]</h3>";
$result03 = str_ends_with($str,"3746");
echo "[3746]: ".$result03."<br>";