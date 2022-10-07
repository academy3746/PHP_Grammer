<?php
// Form 태그 없이 key, value 만으로 동작하는 GET Method
$name = "admin";
$id = "admin01";
$email = "admin01@email.com";
?>

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
</head>
<body>
<h1>GET without Form Tag</h1>
<a href="04_get_result.php?name=<?php echo $name ?>&id=<?php echo $id ?>&email=<?php echo $email ?>">Send!</a>
</body>
</html>
