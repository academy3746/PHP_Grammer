<?php
$ozzy = "Ozzy Osbourne";
$skid = "skid row";
$song = "I remember you";
$angie = "Angie";
$romance = "Goodbye to Romance";

echo "전체 문자열을 대문자로 변환: ".strtoupper($ozzy)."<br>";
// str_to_upper
echo "전체 문자열을 소문자로 변환: ".strtolower($ozzy)."<br>";
// str_to_lower
echo "대소문자가 섞여 있는 문자열의 첫 글자만 대문자로 변환: ".ucfirst($skid)."<br>";
// u_c_first
echo "대소문자가 섞여 있는 문자열에서 각 단어의 첫 글자만 대문자로 변환: ".ucwords($skid)."<br>";
// u_c_words
echo "대소문자가 섞여 있는 문자열의 시작 문자만 소문자로 변환: ".lcfirst($song)."<br>";
// l_c_first

$alter = strtr($angie, "Angie", "Steve");
// 변수 $angie 의 문자열 'Angie' 를 'Steve' 로 글자수만큼 변경
echo "Angie -> ".$alter."<br>";

$replacer = [
    'Goodbye'=>'Don\'t say Goodbye'
];
// 변경할 문자열 페어를 만들어서 변수 $replacer 에 대입
$trans = strtr($romance, $replacer);
/*
 * 변수 $romance 에 있는 문자열 'Goodbye' 를
 * 변수 $replacer 에 들어있는 문자열 페어를 이용해서 'Don't say Goodbye' 로 변경
 * -> 변수 $trans 에 대입
**/
echo "Goodbye -> ".$trans;