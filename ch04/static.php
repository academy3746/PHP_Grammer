<?php
class MyClass
{
    public static $msg = "Hello, PHP 8.0!";

    public static function say()
    {
        // return $this->msg = $msg;
        // -> Can not Access!
        return self::$msg;
    }
}
// $my_class = new MyClass();
echo MyClass::say();