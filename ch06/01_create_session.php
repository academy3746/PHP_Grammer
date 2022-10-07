<?php
session_start(); // initiate session!
$session_value = "Led Zeppelin";
$_SESSION["mySession"] = $session_value;
?>

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Create Session</title>
</head>
<body>
<h1>Session Exercise</h1>
Generate Session!<br>
Session contents are <a href="02_result_session.php">here</a>!!!
</body>
</html>
