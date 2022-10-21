<?php
# DB Config.
$mysql_host = "localhost"; // Localhost or IP address
$mysql_user = "root"; // DB user account
$mysql_password = "1234"; // DB user password

# DB Connection
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password);

# DB Connect failed
if (!$conn) {
    die("Fail to connect DB server! " . mysqli_connect_error());
}

# Create Database
$sql = "CREATE DATABASE metal_god";

if (mysqli_query($conn, $sql)) {
    echo "데이터베이스 생성이 완료되었습니다.";
} else {
    echo "데이터베이스 생성이 실패하였습니다." . mysqli_error($conn);
}

mysqli_close($conn);