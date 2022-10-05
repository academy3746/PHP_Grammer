<?php
class Grunge
{
    public static function say()
    {
        echo "부모 나와!!! <br>";
    }

    public static function myFunc()
    {
        static::say();
    }
}

class Nirvana extends Grunge
{
    public static function test()
    {
        Grunge::myFunc();
        parent::myFunc(); // override class Grunge
        self::myFunc();
    }

    public static function say() // override say() of class Grunge
    {
        echo "자식새끼 나와!!! <br>";
    }
}
Nirvana::test();