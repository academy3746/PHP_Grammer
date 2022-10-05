<?php
class MyException extends Exception
{
    public function myMessage($my_msg)
    {
        return $my_msg;
    }
}

$msg = "Client Error...";
$code = 404;
$e = new MyException($msg, $code);

echo $e->myMessage("Inherited Exception class!")."<hr>";
echo "Exception Message: ".$e->getMessage()."<br>";
echo "Exception Code: ".$e->getCode()."<br>";