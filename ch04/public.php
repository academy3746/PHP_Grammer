<?php
class Example
{
    public $property = 'Property';
    // Able to access anywhere

    /*
    protected $property01 = 'Hey!';
    private $property02 = 'Jude!';
    **/

    public function myFunc()
    {
        return 'Hello, PHP!';
    }
}

$example = new Example();

echo $example->property;

/*
echo $example->property01;
Member has protected visibility

echo $example->property02;
Member has private visibility
**/

echo "<br>";
echo $example->myFunc();