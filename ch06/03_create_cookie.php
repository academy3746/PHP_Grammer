<?php
$cookie_name = "myCookie";
$cookie_value = "Nirvana";
setcookie($cookie_name, $cookie_value, time()+86400 * 30);
// 30일 후에 만료되는 쿠키 생성
?>

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Create Cookie</title>
</head>
<body>
<h1>Cookie Example</h1>
Generate Cookie!<br>
Main Contents are <a href="04_result_cookie.php">here!</a>
</body>
</html>
