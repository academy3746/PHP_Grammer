<?php
# DB Info.
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "1234";
//$mysql_db = "code_otaku";

# DB Connection
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password);

if (!$conn) {
    die("DB Connection [Failed]: ".mysqli_connect_error());
}

# CREATE DATABASE ~
$sql = " CREATE DATABASE metal_god_project ";

if (mysqli_query($conn, $sql)) {
    echo "DB 생성이 완료되었습니다.";
} else {
    echo "DB 생성에 실패하였습니다.".mysqli_error($conn);
}

mysqli_close($conn);