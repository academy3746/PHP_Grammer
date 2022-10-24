<?php
include("./db_config.php");

$mb_id = trim($_POST['mb_id']);
$mb_pw = trim($_POST['mb_pw']);

# ID & Password 시작과 끝, 공백 문자열 유무 여부 체크할 것
if (!$mb_id || !$mb_pw) {
    echo "<script>alert('아이디와 비밀번호를 입력해주세요!')</script>";
    echo "<script>location.replace('./01_index.php')</script>";
}

# `band` 테이블에 등록한 `mb_id` 값이 있는지 체크할 것
$sql = "select * from metalhero.band where mb_id = '$mb_id'";
$result = mysqli_query($conn, $sql);
$mb = mysqli_fetch_assoc($result);

# Get PASSWORD($mb_pw) from `band` table
$sql = "select password('$mb_pw') as 'pass' from metalhero.band";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$password = $row['pass'];

# `mb_id` 존재 여부, `mb_pw` 일치 여부 체크할 것
if (!$mb['mb_id'] || !($password === $mb['mb_pw'])) {
    echo "<script>alert('회원정보가 존재하지 않습니다.')</script>";
    echo "<script>location.replace('./01_index.php')</script>";
    exit();
}

# `mb_id` & `mb_pw` 값을 확인 후, 세션을 생성할 것
$_SESSION['ss_mb_id'] = $mb_id;

# Disconnect DB connection
mysqli_close($conn);

# 세션이 만료되지 않았다면 '06_member_list.php' 페이지로 이동
if (isset($_SESSION['ss_mb_id'])) {
    echo "<script>alert('회원으로 로그인되었습니다.')</script>";
    echo "<script>location.replace('./06_member_list.php')</script>";
}