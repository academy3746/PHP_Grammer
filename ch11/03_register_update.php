<?php
include("./data/db_config.php");

$mode = $_POST['mode'];

# 선택된 mode가 없다면 루프를 종료할 것
switch ($mode) {
    case 'join' :
        $mb_id = trim($_POST['mb_id']);
        $title = "회원가입";
        break;
    case 'modify' :
        $mb_id = trim($_SESSION['ss_mb_id']);
        $title = "회원수정";
        break;
    default:
        echo "<script>alert('회원가입 혹은 회원수정 절차를 완료해주세요!')</script>";
        echo "<script>location.replace('./02_register.php')</script>";
        break;
}

if (!$_POST['mb_id']) {
    echo "<script>alert('아이디를 입력해주세요!')</script>";
    echo "<script>location.replace('./02_register.php')</script>";
    exit();
}

if (!$_POST['mb_password']) {
    echo "<script>alert('비밀번호를 입력해주세요!')</script>";
    echo "<script>location.replace('./02_register.php')</script>";
    exit();
}

if ($_POST['mb_password'] != $_POST['mb_password_re']) {
    echo "<script>alert('비밀번호가 일치하지 않습니다!')</script>";
    echo "<script>location.replace('./02_register.php')</script>";
    exit();
}

if (!$_POST['mb_name']) {
    echo "<script>alert('이름을 입력해주세요!')</script>";
    echo "<script>location.replace('./02_register.php')</script>";
    exit();
}

if (!$_POST['mb_email']) {
    echo "<script>alert('이메일을 입력해주세요!')</script>";
    echo "<script>location.replace('./02_register.php')</script>";
    exit();
}

# Data Manipulation: doPost[] method
$mb_password = trim($_POST['mb_password']);
$mb_password_re = trim($_POST['mb_password_re']);
$mb_name = trim($_POST['mb_name']);
$mb_email = trim($_POST['mb_email']);
$mb_sex = $_POST['mb_sex'] ?? "";
$mb_genre = $_POST['mb_genre'] ?? "";

# Get PASSWORD($mb_password) from DB server
$sql = "select password($mb_password) as `pw` from metal_god.band";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$mb_password = $row['pw'];

if ($mode === "join") { // 회원가입 mode
    $sql = "select * from metal_god.band where mb_id = '$mb_id'";
    $result = mysqli_query($conn, $sql);

    // 아이디 중복여부 체크할 것
    if (mysqli_num_rows($result) > 0) {
        // 레코드의 갯수가 0보다 크면 중복된 아이디로 판별하겠음
        echo "<script>alert('이미 사용중인 회원 아이디입니다!')</script>";
        echo "<script>location.replace('./02_register.php')</script>";
        exit();
    }

    // 회원가입
    $sql = "insert into metal_god.band 
                set mb_id = '$mb_id',
                    mb_password = '$mb_password',
                    mb_name = '$mb_name',
                    mb_email = '$mb_email',
                    mb_sex = '$mb_sex',
                    mb_genre = '$mb_genre',
                    mb_datetime = '$mb_datetime'
                    ";
    $result = mysqli_query($conn, $sql);
} elseif ($mode === "modify") { // 회원수정 mode

    $sql = "update metal_god.band 
                set mb_password = '$mb_password',
                    mb_email = '$mb_email',
                    mb_sex = '$mb_sex',
                    mb_genre = '$mb_genre'
            where mb_id = '$mb_id'
                    ";
    $result = mysqli_query($conn, $sql);
}

# [mode]가 정상적으로 실행되었는지 체크할 것
if ($result) {
    echo "<script>alert('".$title."이 완료 되었습니다.')</script>";
    echo "<script>location.replace('./05_member_list.php')</script>";
    exit();
} else {
    echo "회원정보 생성에 실패하였습니다! " . mysqli_error($conn);
    mysqli_close($conn);
}