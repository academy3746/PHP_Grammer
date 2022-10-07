<?php
$file = fopen("rocker.txt","w");
/*
 * "w"
 * 파일을 연 다음에 내용을 덮어쓰겠음.
 * 기존 내용은 삭제되므로 주의!
 * 아니 왠만해선 쓰지 마... 이런 함수...
 * wwwwwwwww...
 */
fwrite($file,"You're fucking shit! Led Zeppelin!");
fclose($file);