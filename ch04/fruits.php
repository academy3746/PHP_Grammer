<?php
$fruits = array(
    "apple" => "사과",
    "banana" => "바나나"
);

echo $fruits['apple'];
// echo $fruits[banana];
// -> Fatal error: Uncaught Error
?>
<hr>
<?php
echo $fruits['banana'];