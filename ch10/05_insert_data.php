<?php
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "1234";
$mysql_db = "code_otaku";

# Connect DB
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

# Exit Script if error occur
if (!$conn) {
    die("DB Connection [Failed]: " . mysqli_connect_error());
}

# INSERT INTO 'TABLE' (?, ?, ?, ?) VALUES (?, ?, ?, ?);
$sql = " insert into code_otaku.rock_band (band, era, genre_code) VALUES ('Sum41', 90, 10) ";
$sql = " insert into code_otaku.rock_band (band, era, genre_code) VALUES ('Travis', 90, 9) ";
$sql = " insert into code_otaku.rock_stream (genre, era) VALUES ('Post Grunge', 90)";
$sql = " insert into code_otaku.rock_band (band, era, genre_code) VALUES ('Alter Bridge', 00, 11) ";

if (mysqli_query($conn, $sql)) {
    echo "New Record created!";
} else {
    echo "Record failed: ".mysqli_error($conn);
}

mysqli_close($conn);