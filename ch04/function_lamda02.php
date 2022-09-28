<?php
function say($rocker) {
    echo $rocker();
}

say(function () {return 'AC/DC';});