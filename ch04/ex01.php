<?php
class SimpleClass
{
    public $question = "Will you go to Hawaii?";
    public $answer = "No! you go Hawaii!";

    public function displayVar()
    {
        echo $this->question."<br>";
        echo $this->answer."<br>";
    }
}

$simple_class = new SimpleClass();
$simple_class->displayVar();