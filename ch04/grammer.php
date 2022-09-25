<?php // Start of PHP Block

class Grammer // Define Class
{
    public $name = "Code Otaku"; // Allocate String "Code Otaku" to property $name

    public function phpStudy($year) // Define Method
    {
        echo "변수 name은 {$this ->name} 입니다. <br/>"; // Print out Contents

        echo "변수 year은 {$year} 입니다. <br/>";

        echo $this->name . $year . "<br/>";
    }
}

$year = 2022;
$grammer = new Grammer(); // Generate Instance
$grammer->phpStudy($year); // Execute Method