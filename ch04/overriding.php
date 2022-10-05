<?php
declare(strict_types=1);
// convert loosely type to strict type
// 데이터타입이 엄격하게 정의되지 않으면 Type Error 발생!

class Parents
{
    public string $txt = "I'm your father...<br>";

    public function name(): string
    {
        return "{$this->txt}<br>I'm your parent method...<hr>";
    }
}
$parents = new Parents();

class Child extends Parents
{
    public string $txt = "I'm your son!"; // property overriding

    public function name(): string // method overriding
    {
        return "{$this->txt}<br>I'm your child method!<hr>";
    }
}
$child = new Child();

echo $parents->name();
echo $child->name();