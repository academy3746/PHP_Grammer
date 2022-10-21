<?php
# DB Info.
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "1234";
$mysql_db = "metal_god";

# DB Connection
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if (!$conn) {
    die("Fail to connect DB server! " . mysqli_connect_error());
}

ini_set('display_errors', 'off'); // Hide PHP Error Message
session_start();
