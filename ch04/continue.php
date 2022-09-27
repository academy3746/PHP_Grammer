<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>continue</title>
</head>
<body>
    <h1>Continue Point EX</h1>
    <hr>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 === 0) continue;
        // i가 Integer 2로 나누어 떨어진다면 해당 코드는 실행하지 않고 루프만 반복한다!
        // Just Skip & Keep going!
        echo "<p>{$i}</p>";
    }
    ?>
</body>
</html>