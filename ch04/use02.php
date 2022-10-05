<?php
include_once "RockStar/band.php";
include_once "RockStar/Grunge/band.php";
include_once "RockStar/Progressive/band.php";

use RockStar\{
    Band as Band,
    Grunge\Band as Grunge,
    Progressive\Band as Progressive
};

$band01 = new Band();
echo $band01->getRockStarName()."<br>";

$band02 = new Grunge();
echo $band02->getRockStarName()."<br>";

$band03 = new Progressive();
echo $band03->getRockStarName()."<br>";
