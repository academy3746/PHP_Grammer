<?php
class A {
    public function __construct()
    {
        echo __CLASS__;
    }

    public function sayHello()
    {
        return __METHOD__;
    }
}

$say = new A();
echo $say->sayHello();
?>
<br>
<?php
echo PHP_INT_MAX;
?>
<br>
<?php
echo PHP_INT_MIN;
?>
<br>
<?php
echo PHP_INT_SIZE;
?>
