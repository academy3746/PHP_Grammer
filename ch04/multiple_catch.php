<?php
class MyException01 extends Exception{}
class MyException02 extends Exception{}
class MyException03 extends Exception{}

$num = 1;

try {
    if($num == 1){throw new MyException01("404 Not Found!");}
    if($num == 2){throw new MyException02("505 Internal Error!");}
    if($num == 3){throw new MyException03("Ask to Administrator...");}
} catch (MyException01 $e01) {
    echo "Caution: ".$e01->getMessage();
} catch (MyException02 $e02) {
    echo "Caution: ".$e02->getMessage();
} catch (MyException03 $e03) {
    echo "Caution: ".$e03->getMessage();
}