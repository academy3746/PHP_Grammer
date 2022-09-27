<!--
    ※ 주의사항 ※
    1. Switch ~ Match 구문은 PHP 8.0에 추가된 기능이다.
    2. 따라서 현업에서는 Switch ~ Case 구문만 쓰게 될 것이다.
  -->

<?php
echo "<h2>Switch / Case Legacy Pattern</h2>";

$input1 = true;

switch ($input1) {
    case "true":
        $result = "True [String]";
        break;
    case "false":
        $result = "False [String]";
        break;
    case "null":
        $result = "Null [String]";
        break;
    case true:
        $result = "True [Boolean]";
        break;
    case false:
        $result = "False [Boolean]";
        break;
    case null:
        $result = "Null [Boolean]";
        break;
}

echo "<h3>$result</h3>";

echo "<hr>";

echo "<h2>Switch / Match Modern PHP Pattern</h2>";

$input2 = false;

$result = match ($input2) {
  "true" => "True [String]",
  "false" => "False [String]",
  "null" => "Null [String]",
  true => "True [Boolean]",
  false => "False [Boolean]",
  null => "Null [Boolean]"
};

echo "<h3>$result</h3>";
