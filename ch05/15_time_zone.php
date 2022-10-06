<?php
// $timestamp = mktime(14,01,38,10,06,2022);

// English Man in New York
date_default_timezone_set("America/New_York");
echo "New York: ".date("Y/m/d H:i:s")."<br>";

// Irish Man in Seoul
date_default_timezone_set("Asia/Seoul");
echo "Seoul: ".date("Y/m/d H:i:s")."<br>";