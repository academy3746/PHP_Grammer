<?php
# MySql_i_oop: Object Oriented style

// HOST or IP address of DB server
$mysql_host = "localhost";
// DB user account
$mysql_user = "root";
// DB user password
$mysql_password = "1234";
// DB name to connect
$mysql_db = "code_otaku";

// Execute MySQL Database Connection
$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if ($conn->connect_error) {
    die("DB Connection [Failed]: ".$conn->connect_error);
} else {
    echo "DB Connection is succeed!";
}