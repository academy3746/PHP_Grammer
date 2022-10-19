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

$sql = " select * from code_otaku.rock_band ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        echo "id: ".$row['id']." / band: ".$row['band']." / era: ".$row['era']." / genre_code: ".$row['genre_code']."<br>";
    }
} else {
    echo "저장된 데이터가 없습니다!";
}

# Disconnect session between DB server
mysqli_close($conn);

/*
 * [SQL Description on this page]
 * mysqli_connect(): Open a new connection to the MySQL server Alias of mysqli::__construct
 * mysqli_connect_error(): Returns a string description of the last connect error
 * mysqli_query(): Performs a query on the database
 * mysqli_num_rows(): Gets the number of rows in a result
 * mysqli_fetch_array(): Fetch the next row of a result set as an associative, a numeric array, or both
 * mysqli_close(): Closes a previously opened database connection
 */