<?php
include_once "parents.php";
// looks like import in Java

class Child extends Parents
{
    public function myFamily(): string
    {
        return $this->parents;
        // class Parents { public string $parents = "I'm your father..."; }echo "I'm your son..";
    }
}

$child = new Child();

echo $child->myFamily();