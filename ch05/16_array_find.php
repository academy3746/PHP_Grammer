<?php
$bands = [
    "Led Zeppelin"=>"Hard Rock",
    "Nirvana"=>"Grunge Rock",
    "Guns N Roses"=>"LA Metal",
    "Creed"=>"Post Grunge",
    "Green Day"=>"Neo Punk",
    "R.A.T.M"=>"New Metal",
    "Maroon5"=>"Modern Rock"
];

// Search one key in built-in array list.
$find_key = "Creed";

if(array_key_exists($find_key,$bands))
{
    echo "{$find_key} 밴드가 있습니다.<br>";
}else {
    echo "{$find_key} 밴드가 없습니다.<br>";
}

// Search one value in built-in array list.
$find_value = "Grunge Rock";

if(in_array($find_value,$bands))
{
    echo "{$find_value} 장르가 존재합니다.<br>";
} else{
    echo "{$find_value} 장르가 존재하지 않습니다.<br>";
}

// Find & Match Key_Value in built-in array list.
$find_value02 = "Hard Rock";
$band_catch = array_search($find_value02,$bands);
echo "{$band_catch} (이/가) 해당 장르에 부합합니다.<br>";

// Find Keys in built-in array list.
$keys = array_keys($bands);
echo "<pre>";
print_r($keys);
echo "</pre>";

// Find Values in built-in array list.
$values = array_values($bands);
echo "<pre>";
print_r($values);
echo "</pre>";