<?php
# DB Info
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "1234";
$mysql_db = "code_otaku";

# DB Connect
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

# DB Connection fail
if (!$conn) {
    die("DB Connection [Failed]: " . mysqli_connect_error());
}

# UPDATE `TABLE` SET ~
$sql = " update code_otaku.rock_band set genre_code = '9' where band = 'Sum41' ";
$sql = " update code_otaku.rock_band set band = 'Metalica' where band = 'Megadeth' ";

#Update Check
if (mysqli_query($conn, $sql)) {
    echo "레코드가 성공적으로 업데이트 되었습니다.";
} else {
    echo "Record Update [Failed]: " . mysqli_error($conn);
}

mysqli_close($conn);