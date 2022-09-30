<?php
// Before PHP 8.0 style
class Rocker
{
    // Property (Member Variable)
    public string $band;
    public string $style;
    public int $century;

    // Method
    public function __construct(
        $band,
        $style,
        $century,
    )
    {
        $this->band = $band;
        $this->style = $style;
        $this->century = $century;
    }
}
$band = "Nirvana";
$style = "Grunge Rock";
$century = 90;

$rocker = new Rocker(band: $band, style: $style, century: $century);

echo "{$band} (은/는) {$century}년대 {$style} 그룹입니다.";

