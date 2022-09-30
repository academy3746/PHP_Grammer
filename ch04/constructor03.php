<?php
// After PHP 8.0 style
class Rocker
{
    /* 생성자에 직접 매개변수를 지정해 줄 수 있다!
    public string $band;
    public string $style;
    public int $century;
    **/

    public function __construct(
        public string $band,
        public string $style,
        public int $century
    )
    {
        /* 비워놔도 무방.. 자동으로 생성된다!
        $this->band = $band;
        $this->style = $style;
        $this->century = $century;
        **/
    }
}
$band = "Led Zeppelin";
$style = "Blues Rock";
$century = 70;

$rocker = new Rocker(band: $band, style: $style, century: $century);

echo "{$band} (은/는) {$century}년대 {$style} 그룹입니다.";
