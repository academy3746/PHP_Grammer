<?php
# DB Info
$mysql_host = "localhost"; // or Ip address
$mysql_user = "root"; // User account
$mysql_password = "1234"; // User password
$mysql_db = "band"; // DB name

# DB Connection
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if (!$conn) {
    die("Fail to connect DB server" . mysqli_connect_error());
}

ini_set('display_errors', 'off'); // Hide PHP Error msg
session_start();