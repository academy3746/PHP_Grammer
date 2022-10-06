<?php
echo "<h3>Let's use [sub_str] method!</h3>";
echo substr("github",1)."<br>";
// 두 번째 문자열부터 출력!
echo substr("github",1,3)."<br>";
// 두 번째 문자열부터 3글자 출력!
echo substr("github",0,4)."<br>";
// 첫 번째 문자열부터 4글자 출력!
echo substr("github",0,6)."<br>";
// 첫번째 문자열부터 6글차 출력! 그냥 다 출력해!
echo substr("github",-1,1)."<hr>";
// 뒤에서부터 문자열의 첫 번째 순서부터 1글자 출력! 음수형 인덱스...

echo "<h3>Let's use [str_str] method!</h3>";
$email = "academy3746@gmail.com";
$domain = strstr($email,"@");
// $email 변수에서 '@' 가 포함된 문자열부터 전체 문자열을 $domain 변수에 대입할 것!
echo $email;
echo "<br>";
echo $domain."<br>";
$domain02 = strstr($email,"academy");
// $email 변수에서 'academy' 가 포함된 문자열부터 전체 문자열을 $domain 변수에 대입할 것!
echo $domain02."<hr>";

echo "<h3>Let's use [str_pos] method!</h3>";
$pos = strpos($email,"@");
// $email 변수에서 '@'가 들어가 있는 문자열의 인덱스 값을 $pos 변수에 대입할 것!
echo $pos."<br>";
$pos02 = strpos($email,"@");
// $email 변수에서 '-'가 들어가 있는 문자열의 인덱스 값을 $pos02 변수에 대입할 것!
if($pos02 === false)
{
    echo "발견되지 않았습니다!";
} else
{
    echo $pos02."번 인덱스에서 발견되었습니다!";
}