<?php
$file = "paranoid"; // 원본파일 (paranoid.txt) 를 변수 $file 에 대입
echo filesize($file)."<br>"; // size of this file

$path = "ch05/paranoid";

echo basename(path: $path, suffix: ".txt")."<br>";
// suffix: 확장자 ".txt" 만 제외한 파일명 출력
echo dirname(path: $path)."<br>";
// 파일이 포함되어 있는 디렉토리를 출력