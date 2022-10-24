<?php
include("./db_config.php");

$mode = $_POST['mode'];

switch ($mode) {
    case 'join' :
        $mb_id = trim($_POST['mb_id']);
        $title = "회원가입";
        break;
    case 'modify' :
        $mb_id = trim($_POST['ss_mb_id']);
        $title = "회원수정";
        break;
    default :
        echo "<script>alert('회원가입 / 수정 양식을 완성해주세요.')</script>";
        echo "<script>location.replace('./04_register.php')</script>";
        break;
}

if (!$_POST['mb_id']) {
    echo "<script>alert('아이디를 입력해주세요!')</script>";
    echo "<script>location.replace('./04_register.php')</script>";
    exit();
}

if (!$_POST['mb_password']) {
    echo "<script>alert('비밀번호를 입력해주세요!')</script>";
    echo "<script>location.replace('./04_register.php')</script>";
    exit();
}

if ($_POST['mb_password'] != $_POST['mb_password_re']) {
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

# Data Manipulation
$mb_id = trim($_POST['mb_id']);
$mb_password = trim($_POST['mb_password']);
$mb_password_re = trim($_POST['mb_password_re']);
$mb_name = trim($_POST['mb_name']);
$mb_email = trim($_POST['mb_email']);
$mb_genre = $_POST['mb_genre'] ?? "";
$mb_sex = $_POST['mb_sex'] ?? "";
$mb_part = isset($_POST['mb_part']) ? implode("/", $_POST['mb_part']) : "";
$mb_datetime = date('Y-m-d H:i:m', time());

# Get PASSWORD($mb_password) from `hero` table
$sql = " SELECT PASSWORD($mb_password) AS `PASS` FROM lions.hero ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$mb_password = $row['PASS'];

if ($mode == "join") {
    // 회원가입 mode
    $sql = " SELECT * FROM lions.hero WHERE mb_id = '$mb_id' ";
    $result = mysqli_query($conn, $sql);

    // 아이디 중복여부 체크
    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('이미 사용중인 회원 아이디입니다.')</script>";
        echo "<script>location.replace('./04_register.php')</script>";
        exit();
    }

    $sql = " INSERT INTO lions.hero 
                SET mb_id = '$mb_id', 
                    mb_password = '$mb_password',
                    mb_name = '$mb_name',
                    mb_email = '$mb_email',
                    mb_genre = '$mb_genre',
                    mb_sex = '$mb_sex',
                    mb_part = '$mb_part',
                    mb_datetime = '$mb_datetime'
                    ";
    $result = mysqli_query($conn, $sql);
} elseif ($mode == "modify") {
    $sql = " UPDATE lions.hero 
                SET mb_password = '$mb_password',
                    mb_email = '$mb_email',
                    mb_genre = '$mb_genre',
                    mb_sex = '$mb_sex',
                    mb_part = '$mb_part'
                WHERE mb_id = '$mb_id'
                    ";
    $result = mysqli_query($conn, $sql);
}

if ($result) {
    echo "<script>alert('".$title." 절차가 완료되었습니다.')</script>";
    echo "<script>location.replace('./06_member_list.php')</script>";
    exit();
} else {
    echo "DB 생성 실패!" . mysqli_error($conn);
    mysqli_close($conn);
}