<?php
$name = $_POST['name'];
$id = $_POST['id'];
$email = $_POST['email'];
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Post Result</title>
</head>
<body>
<h1>Post Example</h1>
<?php echo $name . "님의 아이디는 " . $id . ", 이메일 주소는 " . $email . " 입니다." . "<br>" ?>
<br>
<a href="01_post.php">뒤로가기</a>
</body>
</html>