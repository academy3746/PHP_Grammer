<?php
# MySQL POD (PHP Data Objects): Object oriented style

// HOST or IP address of DB server
$mysql_host = "localhost";
// DB user account
$mysql_user = "root";
// DB user password
$mysql_password = "1234";
// DB name to connect
$mysql_db = "code_otaku";

// Execute MySQL Database Connection
// looks like JSP...
try {
    $conn = new PDO("mysql:host=$mysql_host;dbname=$mysql_db", $mysql_user, $mysql_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "DB Connection is succssed!";
} catch (PDOException $e) {
    echo "DB Connection [Failed]: ".$e->getMessage();
}