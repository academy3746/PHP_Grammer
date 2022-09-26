<?php
echo '작은 따옴표입니다. <br/>';
echo "큰 따옴표 입니다. <br/>";
echo '작은 따옴표 안에 작은 따옴표\' 사용하기 <br/>';
echo "큰 따옴표 안에 큰 따옴표\" 사용하기 <br/>";
echo "큰 따옴표 안에 줄\n 바꿈하기 <br/>";

// ￦ (\) is escape string
?>
<hr>
[정석]
<?php
$array = array("Apple", 5, "Banana", 3.14, "Mango");
echo "<pre>";
print_r($array);
echo "</pre>";
?>
<hr>
[축약형]
<?php
$array = ["Apple", 5, "Banana", 3.14, "Mango"];
echo "<pre>";
print_r($array);
echo "</pre>";
?>
<hr>
<h2>위, 아래는 근본적으로 똑같다..</h2>
