<?php
include("./db_config.php");
?>
<!doctype html>
<html lang="ko">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="container">
    <h4 class="display-4 text-center">💕WELCOME💕</h4>
    <form action="./02_login_check.php" method="post">
        <div class="mb-3">
            <label for="mb_id">아이디</label>
            <input type="text" id="mb_id" name="mb_id" class="form-control">
        </div>

        <div class="mb-3">
            <label for="mb_pw">비밀번호</label>
            <input type="password" id="mb_pw" name="mb_pw" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">LOGIN</button>
        <a href="./04_register.php" class="btn btn-secondary">JOIN US!</a>
    </form>
</div>

</body>
</html>
