<?php
echo time()."<br>";

$time = mktime(13,41,00,10,6,2022);
echo $time."<br>";

echo microtime()."<br>";
echo microtime(as_float: true)."<br>";
echo "<strong>User can't identify these types of DateTime...</strong> <hr>";

echo date("Y/m/d H:i:s", $time)."<br>";
// 가장 자주 쓰이는 폼!

$datetime = new DateTime("2022/10/06 13:48:49");
// Allocated time
echo $datetime->format("Y/m/d H:i:s")."<br>";

$datetime02 = new DateTime("2022/10/07 00:00:00");
$date_diff = $datetime->diff($datetime02);
echo $date_diff->format("%a")."<br>";
echo $date_diff->days;