<?php
# DB Info
$mysql_host = "localhost"; // Host or IP address of DB server
$mysql_user = "root"; // Username of DB server
$mysql_password = "1234"; // User password of DB server
$mysql_db = "metal_god_project"; // Name of contained DB server

# DB Connection
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

# Check DB Connection
if (!$conn) {
    die("DB 연결에 실패하였습니다. ".mysqli_connect_error());
}

# Hide PHP error message
ini_set('display_errors', 'off');

# Session start
session_start();