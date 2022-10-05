<?php
include_once "CodeOtaku/user.php";
include_once "CodeOtaku/PHP/user.php";
include_once "CodeOtaku/PYTHON/user.php";

$user01 = new CodeOtaku\User();
echo $user01->getNamespaceName()."<br>";

$user02 = new CodeOtaku\PHP\User();
echo $user02->getNamespaceName()."<br>";

$user03 = new CodeOtaku\PYTHON\User();
echo $user03->getNamespaceName()."<br>";