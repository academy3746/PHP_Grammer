<?php
echo "<h1>Switch ~ Match Pattern</h1>";

$input = false;

$result = match ($input) {
    "true" => "1st result",
    "false" => "2nd result",
    "null" => "3rd result",
    true => "True",
    false => "False",
    null => "Null",
    default => "결과 없음!"
};

echo "<h3>$result</h3>";
