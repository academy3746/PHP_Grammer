<?php
include("./db_config.php");

$mode = $_POST['mode'];
/*
$mb_id = trim($_POST['mb_id']);
$_SESSION['ss_mb_id'] = $mb_id;
**/

# Mode Selection: 선택된 mode가 없다면 루프 종료
switch ($mode) {
    case 'join' :
        $mb_id = trim($_POST['mb_id']);
        $title = "회원가입";
        break;
    case 'modify' :
        $mb_id = trim($_SESSION['ss_mb_id']);
        $title = "회원수정";
        break;
    default :
        echo "<script>alert('회원가입 / 수정 양식 폼을 완성해주세요.')</script>";
        echo "<script>location.replace('./04_register.php')</script>";
        break;
}

// 04_register.php
// $_POST['']

if (!$_POST['mb_id']) {
    echo "<script>alert('아이디를 입력해주세요!')</script>";
    echo "<script>location.replace('./04_register.php')</script>";
    exit();
}

if (!$_POST['mb_pw']) {
    echo "<script>alert('비밀번호를 입력해주세요!')</script>";
    echo "<script>location.replace('./04_register.php')</script>";
    exit();
}

if ($_POST['mb_pw'] != $_POST['mb_pw_re']) {
    echo "<script>alert('비밀번호가 일치하지 않습니다!')</script>";
    echo "<script>location.replace('./04_register.php')</script>";
    exit();
}

if (!$_POST['mb_name']) {
    echo "<script>alert('이름을 입력해주세요!')</script>";
    echo "<script>location.replace('./04_register.php')</script>";
    exit();
}

if (!$_POST['mb_email']) {
    echo "<script>alert('이메일을 입력해주세요!')</script>";
    echo "<script>location.replace('./04_register.php')</script>";
    exit();
}

# Data Manipulation: doPost
$mb_id = trim($_POST['mb_id']);
$mb_pw = trim($_POST['mb_pw']);
$mb_pw_re = trim($_POST['mb_pw_re']);
$mb_name = trim($_POST['mb_name']);
$mb_email = trim($_POST['mb_email']);
$mb_genre = $_POST['mb_genre'] ?? '';
$mb_sex = $_POST['mb_sex'] ?? '';
$mb_part = isset($_POST['mb_part']) ? implode("/", $_POST['mb_part']) : "";
$mb_datetime = date("Y-m-d H:i:s", time());

# Get PASSWORD($_mb_pw) from `band` table
$sql = "select password($mb_pw) as 'pass' from metalhero.band";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$password = $row['pass'];

if ($mode === "join") {
    // 회원가입 mode
    // 신규회원 아이디 중복여부 체크
    $sql = "select * from metalhero.band where mb_id = '$mb_id'";
    $result = mysqli_query($conn, $sql);
    // 중복되는 회원아이디라면 '04_register.php' 페이지로 이동
    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('이미 사용중인 회원 아이디입니다.')</script>";
        echo "<script>location.replace('./04_register.php')</script>";
        exit();
    }
    // Insert data in `band` table
    $sql = "insert into metalhero.band 
            set mb_id = '$mb_id',
                mb_pw = '$mb_pw',
                mb_name = '$mb_name',
                mb_email = '$mb_email',
                mb_genre = '$mb_genre',
                mb_sex = '$mb_sex',
                mb_part = '$mb_part',
                mb_datetime = '$mb_datetime'
                ";
    $result = mysqli_query($conn, $sql);
} elseif ($mode === "modify") {
    // 회원수정 mode
    $sql = "update metalhero.band 
            set mb_pw = '$mb_pw',
                mb_email = '$mb_email',
                mb_genre = '$mb_genre',
                mb_sex = '$mb_sex',
                mb_part = '$mb_part'
            where mb_id = '$mb_id'
                ";
    $result = mysqli_query($conn, $sql);
}

if ($result) {
    echo "<script>alert('".$title." 절차가 완료되었습니다.')</script>";
    echo "<script>location.replace('./04_register.php')</script>";
    exit();
} else {
    echo "DB 서버 쿼리 생성에 실패하였습니다." . mysqli_error($conn);
    mysqli_close($conn);
}