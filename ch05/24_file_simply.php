<?php
$filename = "stairway";
// original file to read
$content = file_get_contents(filename: $filename);
// 원본 파일을 읽어들여 변수 $content 에 대입
file_put_contents(filename: "stairway02", data: $content);
/*
 * "stairway02" 파일을 신규 생성
 * 이전 값들을 유지하고 있는 $content 를 읽어들임
 * 읽어들인 값을 "stairway02" 로 저장
 * *.txt 확장자를 붙이면 컴파일 에러가 뜬다...
 * 순수 파일의 경로를 작성해주도록 하자...
 * ctrl c,v on "stairway02' file
 */