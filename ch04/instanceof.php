<?php
class MyClass{}

$my_class = new MyClass();
# my_class: Class
# MyClass: Object (Instance)

$result1 = $my_class instanceof MyClass;
# $my_class belongs to MyClass
# returns 1

print $result1;
echo "<br>";

class YourClass{}

$your_class = new YourClass();
# $your_class: Class
# YourClass: Object (Instance)

$result2 = $your_class instanceof MyClass;
# $your_class doesn't belong to MyClass
# returns nth

print $result2;
echo "<br>";