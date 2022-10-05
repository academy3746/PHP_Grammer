<?php
/*
1. 추상클래스는 상속받는 자식클래스에서 반드시 완성해서 써야함!
2. 만약 그렇지 않으면 자식클래스는 자체적으로 인스턴스 생성이 불가!
3. 추상 클래스가 하나 더 늘어나는 셈이다!
**/

abstract class MetalHero
{
    public string $band;
    public string $style;
    public int $age;

    abstract function desc();

    public function intro()
    {
        echo "We're STARS!!! <br>";
    }
}

class RockStar extends MetalHero
{
    public function desc()
    {
        // TODO: Implement intro() method.
        echo "{$this->band} is {$this->age}'s {$this->style} band. <br>";
    }
}
$rock_star = new RockStar();
$rock_star->band = "Led Zeppelin";
$rock_star->style = "Blues Rock";
$rock_star->age = 70;

$rock_star->desc();
$rock_star->intro();




