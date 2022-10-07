<?php
session_start();
?>

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Session Result</title>
</head>
<body>
<h1>Session Example</h1>
Session value is... <?php echo $_SESSION["mySession"]; ?>!!!<br>
<a href="01_create_session.php">[Get Back]</a>
</body>
</html>
