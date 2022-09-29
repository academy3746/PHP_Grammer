<?php
class MyClass // Create Class
{
    function say($string) // Create method (member function)
    {
//      return $string;
        echo $string;
    }
}

$my_class = new MyClass(); // Create instance of 'MyClass'

$my_class->say('Hello, you jerky boys!'); // Transfer argument (type: string)