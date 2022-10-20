<?php
include("data/db_conn.php");

$bh_id = trim($_POST['bh_id']);
$bh_password = trim($_POST['bh_password']);
// trim: Strip whitespace from the beginning and end of a string

# 아이디와 비밀번호의 시작과 끝에 공백이 존재하는지 검사할 것
if (!$bh_id || !$bh_password) {
    echo "<script>alert('아이디, 혹은 비밀번호를 입력해주세요!')</script>";
    echo "<script>location.replace('./01_index.php')</script>";
    exit();
}

# band_hero 테이블에서 해당 아이디가 존재하는지 검사할 것
$sql = " select * from metal_god_project.band_hero where bh_id = $bh_id ";
$result = mysqli_query($conn, $sql); // Performs a query on the database
$band = mysqli_fetch_assoc($result); // Fetch the next row of a result set as an associative array

# 입력한 비밀번호를 MySQL PASSWORD 함수를 이용해 암호화해서 가져올 것
$sql = "select password($bh_password) as pw from metal_god_project.band_hero";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$pw = $_POST['pw'];

# 아이디 존재여부 체크, 패스워드 일치여부 체크
if (!$band['bh_id'] || !($pw === $band['bh_password'])) {
    echo "<script>alert('회원정보가 존재하지 않습니다.')</script>";
    echo "<script>location.replace('./01_index.php')</script>";
    exit();
}

# 아이디, 비밀번호 체크 후 세션을 생성할 것
$_SESSION['ss_bh_id'] = $bh_id;

# DB 연결 해제
mysqli_close($conn);

# 세션이 존재한다면 회원목록 페이지로 이동할 것
if (isset($_SESSION['ss_bh_id'])) {
    echo "<script>alert('로그인 되었습니다.')</script>";
    echo "<script>location.replace('./05_member_list.php')</script>";
}