<?php
# Include 'db_conn.php' file to connect DB
include "./data/db_conn.php"
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="container">
    <h4 class="display-4 text=center">MEMBER LOGIN</h4>
    <form action="./03_login_check.php" method="post">
        <div class="mb-3">
            <label for="bh_id">ID</label>
            <input type="text" id="bh_id" name="bh_id" class="form-control">
        </div>
        <div class="mb-3">
            <label for="bh_password">Password</label>
            <input type="password" id="bh_password" name="bh_password" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">LOGIN</button>
        <a href="./02_register.php" class="btn btn-secondary">JOIN US</a>
    </form>
</div>

</body>
</html>
