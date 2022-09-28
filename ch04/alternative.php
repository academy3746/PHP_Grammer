<!doctype html>

<!--
    ※ 학습 목표 ※
    1. PHP / HTML 코드가 섞여 있다면 가독성이 떨어지는 것이 사실이다.
    2. 코드의 양이 많아질수록 내가 작성한 코드도 내가 보기 싫어진다.
    3. 제어문에 한해서 대체코드를 쓸 수가 있으니, 이참에 배우고 가자.
-->

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Alternative</title>
</head>
<body>
    <h1>Control Statement Alternative</h1>
    <h2>[If_EndIf]</h2>
    <h3>통상적으로 쓰이는 if 구문을 대체하여 쓸 수 있다.</h3>

    <?php
    $score = 40;

    if ($score >= 90):
        echo "You got A grade!";
    elseif ($score >= 80):
        echo "You got B grade!";
    elseif ($score >= 70):
        echo "You got C grade";
    elseif ($score >= 60):
        echo "You got D grade!";
    else:
        echo "재수강 해 임마!";
    endif;
    ?>

    <hr>

    <h2>[Switch_EndSwitch]</h2>
    <h3>통상적으로 쓰이는 switch-case 구문을 대체하여 쓸 수 있다.</h3>

    <?php
    $i = 4;

    switch ($i):
        case 0:
            echo "i is 0";
            break;
        case 1:
            echo "i is 1";
            break;
        case 2:
            echo "i is 2";
            break;
        case 3:
            echo "i is 3";
            break;
        case 4:
            echo "i is 4";
            break;
        case 5:
            echo "i is 5";
            break;
        default:
            echo "
            Invalid value!<br>
            Please insert limited value between 0 to 5<br>";
    endswitch;
    ?>

    <hr>

    <h2>[While_EndWhile]</h2>
    <h3>통상적으로 쓰이는 while 구문을 대체하여 쓸 수 있다.</h3>

    <?php
    $i = 1;

    while ($i <= 10):
    echo "<p>$i</p>";
    $i++;
    endwhile;
    ?>

    <hr>

    <h2>[For_EndFor]</h2>
    <h3>통상적으로 쓰이는 for 구문을 대체하여 쓸 수 있다.</h3>

    <?php
    for($i=1 ; $i<=10 ; $i++):
    echo "<p>$i</p>";
    endfor;
    ?>

    <hr>

    <h2>[ForEach_EndForEach]</h2>
    <h3>통상적으로 쓰이는 foreach 구문을 대체하여 쓸 수 있다.</h3>

    <?php
    $arr = array(
        'band1' => 'Led Zeppelin',
        'band2' => 'White Snake',
        'band3' => 'Deep Purple'
    );

    foreach ($arr as $key => $value):
        echo "<p>{$key}: {$value}</p>";
    endforeach;
    ?>
</body>
</html>