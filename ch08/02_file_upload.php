<?php
$upload_dir = './uploads'; // 업로드할 파일의 디렉토리 설정
$allowed_ext = array('jpg','jpeg','png','gif'); // 파일 확장자 지정

// 업로드할 파일의 디렉토리가 없다면?
if (!is_dir($upload_dir))
{
    if (!mkdir($upload_dir,0777))
    {
        die("업로드 디렉토리 생성에 실패하였습니다.");
    }
}

// 업로드할 파일이 없다면?
if (!isset($_FILES['my_file']))
{
    die("파일이 존재하지 않습니다.");
}

// 반환된 오류코드를 변수 $error 에 할당
$error = $_FILES['my_file']['error'];
// File's name
$name = $_FILES['my_file']['name'];

// 오류 확인을 위한 match expression
