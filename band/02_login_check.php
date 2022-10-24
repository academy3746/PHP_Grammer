<?php
include("./db_config.php");

$mb_id = trim($_POST['mb_id']);
$mb_password = trim($_POST['mb_password']);

# ID / Password 시작과 끝, 공백문자열 체크
if (!$mb_id || !$mb_password) {
    echo "<script>alert('아이디와 비밀번호에 공백이 존재해서는 안됩니다.')</script>";
    echo "<script>location.replace('./01_index.php')</script>";
    exit();
}

# `hero` 테이블에서 조회할 `mb_id`가 있는지 체크
$sql = " SELECT * FROM lions.hero WHERE mb_id = '$mb_id' ";
$result = mysqli_query($conn, $sql);
$mb = mysqli_fetch_assoc($result);

# Get PASSWORD($mb_password) from `hero` table
$sql = " SELECT PASSWORD($mb_password) AS `PASS` FROM lions.hero ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$password = $row['PASS'];

# `mb_id` 실재 여부, `mb_password` 일치 여부 체크
if (!$mb['mb_id'] || !($password === $mb['mb_password'])) {
    echo "<script>alert('회원정보가 존재하지 않습니다.')</script>";
    echo "<script>location.replace('./01_index.php')</script>";
    exit();
}

$_SESSION['ss_mb_id'] = $mb_id;

mysqli_close($conn);

if (isset($_SESSION['ss_mb_id'])) {
    echo "<script>alert('로그인 상태입니다.')</script>";
    echo "<script>location.replace('./06_member_list.php')</script>";
}