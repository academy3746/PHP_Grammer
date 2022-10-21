<?php
include("./data/db_config.php");

$mb_id = trim($_POST['mb_id']);
$mb_password = trim($_POST['mb_password']);

# ID / Password 각각 시작과 끝에 공백 문자가 있는지 체크할 것
if (!$mb_id || !$mb_password) {
    echo "<script>alert('아이디 혹은 패스워드를 입력해주세요!')</script>";
    echo "<script>location.replace('./01_index.php')</script>";
    exit();
}

# `band` 테이블에서 해당 `mb_id`가 존재하는지 체크할 것
$sql = "select * from metal_god.band where mb_id = '$mb_id'";
/** @noinspection PhpUndefinedVariableInspection */
$result = mysqli_query($conn, $sql);
$mb = mysqli_fetch_assoc($result);

# Get PASSWORD($mb_password) from DB server
$sql = "select PASSWORD($mb_password) as `pw` from metal_god.band";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$mb_password = $row['pw'];

# 아이디 중복여부, 비밀번호 일치여부 체크할 것
if (!$mb['mb_id'] || !($mb_password === $mb['mb_password'])) {
    echo "<script>alert('회원정보가 존재하지 않습니다!')</script>";
    echo "<script>location.replace('./01_index.php')</script>";
    exit();
}

# ID / Password를 확인한 후, 세션 생성할 것
$_SESSION['ss_mb_id'];

# Disconnect DB connection
mysqli_close($conn);

# 세션이 존재한다면 './05_member_list.php' 페이지로 이동할 것
if (isset($_SESSION['ss_mb_id'])) {
    echo "<script>alert('정상적으로 로그인되었습니다.')</script>";
    echo "<script>location.replace('./05_member_list.php')</script>";
}

