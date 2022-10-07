<?php
$cur_dir = "./";

if (is_dir($cur_dir)) { // 디렉토리 존재 여부 검사
    echo "$cur_dir 디렉토리가 존재합니다.<br>";
} else {
    echo "$cur_dir 디렉토리가 존재하지 않습니다.<br>";
}

$cur_dir = "../ch05";
if (is_dir($cur_dir)) {
    echo "$cur_dir 디렉토리가 존재합니다.<br>";
} else {
    echo "$cur_dir 디렉토리가 존재하지 않습니다.<br>";
}

$file = basename(__FILE__); // 현재 파일의 전체 경로 및 이름이 변수 $file 에 전달
if (is_file($file)) { // 파일의 존재여부 검사
    echo "$file 파일이 존재합니다.<br>";
} else {
    echo "$file 파일이 존재하지 않습니다.<br>";
}
if (file_exists($cur_dir)) { // 파일 혹은 디렉토리의 존재 여부 검사
    echo "$cur_dir 파일 혹은 디렉토리가 존재합니다.<br>";
} else {
    echo "$cur_dir 파일 혹은 디렉토리가 존재하지 않습니다.<br>";
}
if (file_exists($file)) {
    echo "$file 파일 혹은 디렉토리가 존재합니다.<br>";
} else {
    echo "$file 파일 혹은 디렉토리가 존재하지 않습니다.<br>";
}