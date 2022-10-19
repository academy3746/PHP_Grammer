<?php
# DB Info
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "1234";
$mysql_db = "code_otaku";

# DB Connection
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if (!$conn) {
    die("DB Connection [Failed]: ".mysqli_connect_error());
}

# DELETE FROM `TABLE` WHERE ~
$sql = " delete from code_otaku.rock_band where band = 'Alter Bridge' ";

if (mysqli_query($conn, $sql)) {
    echo "삭제가 정상적으로 완료되었습니다.";
} else {
    echo "Record Delete [Failed]: ".mysqli_error($conn);
}

mysqli_close($conn);