<?php
# DB Info.
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "1234";
$mysql_db = "lions";

# DB Connection
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

# DB Connect attempt failed
if (!$conn) {
    die("DB 접속에 실패했습니다." . mysqli_connect_error());
}

# PHP error non-display
ini_set('display_errors', 'Off');

# Session start
session_start();