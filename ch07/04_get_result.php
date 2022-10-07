<?php
$name = $_GET['name'];
$id = $_GET['id'];
$email = $_GET['email'];
?>

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Get Result</title>
</head>
<body>
<?php echo $name." 회원님의 ID는 ".$id.", 가입된 이메일 주소는 ".$email." 입니다."."<br>" ?>
<br>
<a href="03_get.php">뒤로가기</a>
</body>
</html>
