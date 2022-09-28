<?php
function rock_music($band, $genre) {
    $my_band = array(
        $band, $genre
    );
    return $my_band;
}
// 두 개의 매개변수를 사용
// 배열을 리턴 값으로 지정하였음!

$result = rock_music('Dream Theater', 'Progressive Power Metal');
print_r($result);
//echo $result;