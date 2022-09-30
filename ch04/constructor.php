<?php
class Example
{
    protected string $band;
    protected string $style;

    public function __construct()
    // 가장 먼저 실행될 것!
    // 기본생성자 in Java
    {
        $this->band = "Pink Ployd";
        $this->style = "Progressive Rock";

        echo "{$this->band} is {$this->style} Band.";
    }
}

$example = new Example();