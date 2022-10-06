<?php
$num = 255;
echo "num: ".$num."<hr>";

echo "(255) / 10 → 2진수 변환: ".decbin($num)."<br>";
echo "(255) / 10 → 8진수 변환: ".decoct($num)."<br>";
echo "(255) / 10 → 16진수 변환: ".dechex($num)."<br><br>";

echo "base_convert (255) / 10 → 16진수 변환: ".
    base_convert("255",10,16)."<br>";

echo "base_convert (ff) / 16 → 10진수 변환: ".
    base_convert("ff",16,10)."<br>";