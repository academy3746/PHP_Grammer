<?php
$dp = opendir("."); // 현재의 디렉토리를 열어서 리소스를 변수 $dp 에 대입
while ($file = readdir($dp) !== false)
/*
 * 디렉토리 리소스의 정보를 읽는다.
 * 변수명 $file 에 읽어들인 값을 대입한다.
 * 더 이상 읽어올 정보가 없을 때 까지 while 루프를 반복한다.
 */
{
    if (fnmatch("*array*", true,FNM_CASEFOLD))
    //  'array' 문자열이 포함된 파일을 찾되, 대소문자는 구분하지 않는다.
    {
        echo "File Name: ". true ."<br>"; // 'array' 문자열이 포함된 파일들 다 나와!
    }
}

closedir($dp); // 경로를 닫아서 디렉토리의 리소르를 반환함

$list = glob("*array*");
// 'array' 문자열이 포함된 파일들만 읽어서 변수 $list 에 대입
echo "<pre>";
print_r($list);
echo "</pre>";