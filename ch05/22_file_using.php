<?php
$file_name = "test.txt";

// 낱말 한 개씩 출력해서 볼 일이 있겠냐?
$fp = fopen($file_name,"r"); // Open file as read only mode.
while ($reading = fgetc($fp)) // f_get(): Read file word by word.
{
    echo $reading."<br>";
}
fclose($fp); // Close this file, return resources.

echo "<hr>";

// 적어도 한 줄씩 출력해서 보겠지...
$fp = fopen($file_name,"r"); // Open file as read only mode.
while ($reading = fgets($fp)) // f_gets(): Read file line by line.
{
    echo $reading."<br>";
}
rewind($fp); // F5

echo "<hr>";

$length = filesize($file_name);
// filesize(): (test.txt) 파일의 크기를 가져와서 변수 $length 에 대입
$string = fread(stream: $fp, length: $length);
/*
 * fread(): 컨텐츠를 특정 길이만큼 읽겠음
 * 파일의 컨텐츠 ($fp)를...
 * 파일의 크기 ($length: filesize($file_name))만큼 가져와서
 * 변수 $string 에 대입
 */
fclose($fp); // Close this file, return resources.

$string = nl2br($string);
// nl2br($string): 변수 $string 에 줄 바꿈 함수를 적용해서 다시 변수 $string 에 덮어쓰겠음

echo $string;