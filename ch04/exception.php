<?php
$msg = "Internal Server Error!";
$code = 505;
$e = new Exception($msg, $code);

echo "Exception Code: ".$e->getCode()."<br>";
echo "Exception Message: ".$e->getMessage()."<br>";