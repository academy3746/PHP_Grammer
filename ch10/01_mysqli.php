<?php
# MySql_i: Legacy Procedural style

// HOST or IP address of DB Server
$mysql_host = "localhost";
// DB user account
$mysql_user = "root";
// DB user password
$mysql_password = "1234";
// DB name to connect
$mysql_db = "code_otaku";

// Execute MySQL Database Connection
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if (!$conn) {
    die("DB Connection [Failed]: " . mysqli_error());
} else {
    echo "DB Connection is succeed!";
}