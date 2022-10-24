<?php
# DB Information
$mysql_host = "localhost"; // Localhost or IP address of DB `metalhero`
$mysql_user = "root"; // User account of DB `metalhero`
$mysql_pw = "1234"; // User password of DB `metalhero`
$mysql_db = "metalhero"; // Name of DB

# DB Connection
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_pw, $mysql_db);

# DB Connection attempt fail
if (!$conn) {
    die("DB 서버 연결에 실패하였습니다. " . mysqli_connect_error());
}

# Disable PHP error
ini_set('display_errors', 'Off');

# Start session
session_start();