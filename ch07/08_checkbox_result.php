<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Checkbox</title>
</head>
<body>
<h1>Checkbox Result</h1>
<p>
    <?php
    if (isset($_POST['band'])) { // Check out if there is a 'key' : 'band' or not.
        echo "선택한 밴드는...<br>";
        for ($i = 0; $i < count($_POST['band']); $i++) { // 전송받은 $_POST['band'] 의 갯수만큼 루프 출력
            $band = $_POST['band'][$i];
            echo $band." 입니다."."<br>";
        }
    } else {
        echo "선택한 밴드가 없습니다."."<br>";
    }
    ?>
</p>
<a href="07_checkbox.php">Back</a>
</body>
</html>