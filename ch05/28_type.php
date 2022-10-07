<?php
echo "<h3>[Check out var type is array or not.]</h3>";
$ch01 = is_array(array(1, 2, 3));
$ch02 = is_array([1, 2, 3]);
echo "ch01: ".$ch01."<br>";
echo "ch02: ".$ch02."<hr>";

echo "<h3>[Check out var type is bool or not.]</h3>";
$ch03 = is_bool(true);
$ch04 = is_bool(false);
echo "ch03: ".$ch03."<br>";
echo "ch04: ".$ch04."<hr>";

echo "<h3>[Check out var type is float or not.]</h3>";
$ch05 = is_float(130);
$ch06 = is_float(3.15);
echo "ch06: ".$ch05."<br>";
echo "ch07: ".$ch06."<hr>";

echo "<h3>[Check out var type is int or not.]</h3>";
$ch07 = is_int(30);
$ch08 = is_int(3.14);
echo "ch07: ".$ch07."<br>";
echo "ch08: ".$ch08."<hr>";

echo "<h3>[Check out var type is null or not.]</h3>";
$ch09 = is_null(null);
$ch10 = is_null("null");
echo "ch09: ".$ch09."<br>";
echo "ch10: ".$ch10."<hr>";

echo "<h3>[Check out var type is numeric or not.]</h3>";
$ch11 = is_numeric(523);
$ch12 = is_numeric("부엉이");
echo "ch11: ".$ch11."<br>";
echo "ch12: ".$ch12."<hr>";

echo "<h3>[Check out var type is string or not.]</h3>";
$ch13 = is_string("부엉이");
$ch14 = is_string(523);
echo "ch13: ".$ch13."<br>";
echo "ch14: ".$ch14."<hr>";