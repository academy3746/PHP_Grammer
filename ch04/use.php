<?php
include_once "CodeOtaku/user.php";
include_once "CodeOtaku/PHP/user.php";
include_once "CodeOtaku/PYTHON/user.php";

/* Legacy style
use CodeOtaku\User as User;
use CodeOtaku\PHP\User as PhpUser;
use CodeOtaku\PYTHON\User as PythonUser;
**/

// Modern style
use CodeOtaku\{
    User as User,
    PHP\User as PhpUser,
    PYTHON\User as PythonUser
};

$user01 = new User();
echo $user01->getNamespaceName()."<br>";

$user02 = new PhpUser();
echo $user02->getNamespaceName()."<br>";

$user03 = new PythonUser();
echo $user03->getNamespaceName()."<br>";