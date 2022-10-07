<?php
class MyBand{}
$obj = new MyBand();
// PHP 8.0: 객체형의 경우, 클래스까지 정확하게 지칭한다!

$band = "Dream Theater";
$number = 5.0;
$progressive = true;
$age = 2000;
$sal = null;
$member = [
  'John Petrucci',
  'John Myung',
  'James LaBrie',
  'Jordan Rudess',
  'Mike Mangini'
];

echo "obj: ".get_debug_type($obj)."<br>";
echo "band: ".get_debug_type($band)."<br>";
echo "number: ".get_debug_type($number)."<br>";
echo "progressive: ".get_debug_type(true)."<br>";
echo "age: ".get_debug_type($age)."<br>";
echo "sal: ".get_debug_type($sal)."<br>";
echo "member: ".get_debug_type($member)."<br>";