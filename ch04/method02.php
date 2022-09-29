<?php

class YourClass // Create Class named YourClass{}
{
    function say(string|int $string, $int): mixed
        // Create method (member function)
        // PHP version 8.0 이후부터 적용되는 패치이므로 실제로 써먹을라면 요원하겠지..
        // 7.4 버전으로 낮춰봤더니 에러 나더라..
    {
        $arr = array($string, $int);

        return $arr;
    }
}

$your_class = new YourClass(); // Create Instance

$result = $your_class->say(string: 'Baskin Robbins', int: 31); // Transfer arguments

print_r($result);