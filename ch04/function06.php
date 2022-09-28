<?php
function rock_music($band, $genre) {
    $my_band = "<p>{$band} (은/는) {$genre} 입니다.</p>";
    return $my_band;
}
// 2개의 매개변수를 사용하고 있고, 리턴 값을 지정 해줬음!

echo rock_music('R.A.T.M', 'New Metal');
echo rock_music('Queen', 'Classic Rock');
echo rock_music('Metalica', 'Thrash Metal');
echo rock_music('Nirvana', 'Alternative Rock');
echo rock_music('Heloween', 'Melodic Speed Power Metal');

