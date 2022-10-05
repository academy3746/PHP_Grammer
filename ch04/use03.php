<?php
include_once "MetalHero/metal.php";
include_once "MetalHero/Journey/metal.php";
include_once "MetalHero/SlipKnot/metal.php";

use MetalHero\{
    Metal as Metal,
    Journey\Metal as Journey,
    SlipKnot\Metal as SlipKnot
};

$metal01 = new Metal();
echo $metal01->getName()."<br>";

$metal02 = new Journey();
echo $metal02->getName()."<br>";

$metal03 = new SlipKnot();
echo $metal03->getName()."<br>";