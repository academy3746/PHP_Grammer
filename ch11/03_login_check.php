<?php
include "data/db_conn.php";

$bh_id = trim($_POST['bh_id']);
$bh_password = trim($_POST['bh_password']);
// trim: Strip whitespace (or other characters) from the beginning and end of a string

# ID or Password whitespace check
if (!$bh_id || !$bh_password) {
    echo "<script>alert('아이디 혹은 비밀번호가 공백이면 안됩니다.');</script>";
    echo "<script>location.replace('./01_index.php');</script>";
    exit();
}

# Check the DB to see if the ID exists.
$sql = " select * from metal_god_project.band_hero where bh_id = $bh_id ";
$result = mysqli_query($conn, $sql);
// mysqli_query(): Performs a query on the database
$bh = mysqli_fetch_assoc($result);
// mysqli_fetch_assoc: Fetch the next row of a result set as an associative array

# Encrypt the entered password using the password() function and get it.
$sql = " select password('$bh_password') as pw from metal_god_project.band_hero ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$password = $row['pw'];

# Check if the ID exists and the entered password matches the password stored in the member table.
if (!$bh['bh_id'] || !$password === $bh['bh_password']) {
    echo "<script>alert('가입된 회원이 아니거나, 비밀번호가 일치하지 않습니다.');</script>";
    echo "<script>location.replace('./01_index.php')</script>";
    exit();
}

# After confirming the ID and password, create a session
$_SESSION['ss_bh_id'] = $bh_id;

# Disconnect DB connection
mysqli_close($conn);

# If session exists, go to page '0301_member_list.php'.
if (isset($_SESSION['ss_bh_id'])) {
    echo "<script>alert('정상적으로 로그인되었습니다.');</script>";
    echo "<script>location.replace('0301_member_list.php')</script>";
}
