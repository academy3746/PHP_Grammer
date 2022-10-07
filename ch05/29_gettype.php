<?php
$band = "Oasis";
$male = true;
$age = 90;
$members = 5.0;
$pay = null;
$men = [1, 2, 3, 4, 5];

class Band{}
$obj = new Band();

echo "band: ".gettype($band)."<br>";
echo "male: ".gettype(true)."<br>";
echo "age: ".gettype($age)."<br>";
echo "members: ".gettype($members)."<br>";
echo "pay: ".gettype($pay)."<br>";
echo "men: ".gettype($men)."<br>";
echo "obj: ".gettype($obj)."<br>";