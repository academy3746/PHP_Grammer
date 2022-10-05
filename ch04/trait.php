<?php
// Trait: 프로퍼티, 메서드, 추상 타입 전부 사용 가능!
// 상속받고자 하는 클래스에서 [use]만 써주면 됨!

trait RockBand
{
    // Property
    public string $band;
    public string $type;
    public int $age;

    // Method
    public function desc()
    {
        echo "I'm a rocker! <br>";
    }
}

trait Intro
{
    // Abstract Method
    abstract public function greet();
}

class RockStar
{
    // Alternative style for multiple inheritance
    use RockBand, Intro;

    public function greet(): void
    {
        // TODO: Implement greet() method.
        echo "{$this->band} is {$this->age}'s {$this->type} Band. <br>";
    }
}
$rock_star = new RockStar();
$rock_star->band = "Deep Purple";
$rock_star->type = "Hard Rock";
$rock_star->age = 70;

$rock_star->desc();
$rock_star->greet();