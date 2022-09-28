<?php
$and = ',';

function myFunc()
{
    global $and;
    $gnd = 'world';

    return function ($hel) use ($and, $gnd) {
        $exc = "!";
        return $hel .$and. $gnd. $exc;
    };
}

$hello = myFunc();
echo $hello('hello');