<?php
$str = [
    'www',
    'github',
    'com'
];

# Let's use implode method!
echo implode($str)."<br>";
echo implode(".",$str)."<hr>";

# Let's use join method!
echo join($str)."<br>"; // looks like alias
echo join(".",$str)."<br>";

// Both are same!