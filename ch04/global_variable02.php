<?php
$str = "PHP";

function myFunc()
{
    echo "<p>변수 str의 값: {$GLOBALS['str']}</p>";
}

myFunc();
echo "<p>변수 str의 값: {$GLOBALS['str']}</p>";
echo "<p>변수 str의 값: {$str}</p>";
