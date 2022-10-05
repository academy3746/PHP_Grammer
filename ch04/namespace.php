<?php
namespace CodeOtaku\PHP;

class Student
{
    public function __construct(
        protected $name
    )
    {
    }

    public function name()
    {
        return $this->name;
    }
}

namespace CodeOtaku\PYTHON;

class Student
{
    public function __construct(
        protected $name
    )
    {
    }

    public function name()
    {
        return $this->name;
    }
}

$php = new \CodeOtaku\PHP\Student('PHP');
echo $php->name()."<br>";

$python = new \CodeOtaku\PYTHON\Student('PYTHON');
echo $python->name()."<br>";