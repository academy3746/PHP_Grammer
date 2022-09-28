<?php
function rock_music($band, $genre) {
    echo "<p>{$band} (은/는) {$genre} (을/를) 연주합니다.</p>";
}
// 두 개의 매개변수를 지정해줬고, 리턴 타입은 아직 없다.

rock_music('Led Zeppelin', 'Blues Rock');
rock_music('Deep Purple', 'Hard Rock');
rock_music('Guns N Roses', 'LA Metal');
rock_music('Black Sabbath', 'N.W.B.H.M');
rock_music('Oasis', 'British Pop');
