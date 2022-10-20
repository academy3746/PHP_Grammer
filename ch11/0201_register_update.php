<?php
include "data/db_conn.php";

$mode = $_POST['mode'];

# Terminate the loop if there is no mode.
switch ($mode) {
    case 'insert':
        $bh_id = trim($_POST['bh_id']);
        $title = "회원가입";
        break;
    case 'modify':
        $bh_id = trim($_SESSION['ss_bh_id']);
        $title = "회원수정";
        break;
    default:
        echo "<script>alert('회원가입 / 회원수정을 완료해주세요!');</script>";
        echo "<script>location.replace('./02_register.php');</script>";
        break;
}

if (!$_POST['bh_id']) {
    echo "<script>alert('아이디를 입력해주세요!')</script>";
    echo "<script>location.replace('02_register.php');</script>";
    exit();
}

if (!$_POST['bh_password']) {
    echo "<script>alert('비밀번호를 입력해주세요!')</script>";
    echo "<script>location.replace('./02_register.php')</script>";
    exit();
}

if($_POST['bh_password'] != $_POST['bh_password_re']) {
    echo "<script>alert('비밀번호가 일치하지 않습니다.');</script>";
    echo "<script>location.replace('./02_register.php');</script>";
    exit();
}

if(!$_POST['bh_name']) {
    echo "<script>alert('이름을 입력해주세요!');</script>";
    echo "<script>location.replace('./02_register.php')</script>";
    exit();
}

if (!$_POST['bh_email']) {
    echo "<script>alert('이메일을 입력해주세요!')</script>";
    echo "<script>location.replace('./02_register.php')</script>";
    exit();
}

# Process the data received by POST method
$bh_password = trim($_POST['bh_password']); // Insert password 1st try
$bh_password_re = trim($_POST['bh_password_re']); // Check if the password is correct or not
$bh_name = trim($_POST['bh_name']); // Member name
$bh_email = trim($_POST['bh_email']); // Member email
$bh_sex = $_POST['bh_sex'] ?? ""; // Sex
$bh_genre = isset($_POST['bh_genre']) ? implode(",", $_POST['bh_genre']) : "";
// implode: Join array elements with a string
$bh_datetime = date("y-m-d H:i:s"); // Register day

$sql = " select password(bh_password) as pw from metal_god_project.band_hero ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$bh_password = $row['pw'];

# New register process
if ($mode === "insert") {
    $sql = " select * from metal_god_project.band_hero where bh_id = $bh_id";
    $result = sqlite_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('이미 사용중인 아이디이니다.')</script>";
        echo "<script>location.replace(('02_register.php'))</script>";
        exit();
    }

    $sql = " insert into metal_god_project.band_hero 
                set bh_id = $bh_id,
                    bh_password = $bh_password,
                    bh_name = $bh_name,
                    bh_email = $bh_email,
                    bh_sex = $bh_sex,
                    bh_genre = $bh_genre,
                    bh_datetime = $bh_datetime";

    $result = mysqli_query($conn, $sql);

} elseif ($mode === "modify") {
    $sql = " update metal_god_project.band_hero 
                set bh_password = '$bh_password',
                    bh_email = '$bh_email',
                    bh_genre = '$bh_genre',
                    bh_sex = '$bh_'
                where bh_id = '$bh_id';
                    ";
    $result = mysqli_query($conn, $sql);
}

if ($result) {
    echo "<script>alert('".$title."이 완료되었습니다.')</script>";
    echo "<script>location.replace('./0301_member_list.php')</script>";
    exit();
} else {
    echo "생성 실패!".mysqli_error($conn);
    mysqli_close($conn);
}