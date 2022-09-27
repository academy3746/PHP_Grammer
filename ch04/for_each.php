<?php
$rock_bands = [
    "Led Zeppelin" => "Stairway to heaven",
    "Motor head" => "Ace of Spades",
    "Foo Fighters" => "Paint in Black"
];

echo "<h1>Value only</h1>";
echo "<h2>Song only</h2>";
foreach ($rock_bands as $rock_band) {
    echo "<p>{$rock_band}</p>";
}

echo "<hr>";

echo "<h1>Key: Value</h1>";
echo "<h2>Band: Song</h2>";
foreach ($rock_bands as $rock_band => $song) {
    echo "<p>{$rock_band} => {$song}</p>";
}
