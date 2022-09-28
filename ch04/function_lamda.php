<?php
// function void() {}: 일반적인 함수 정의 타입

$lambda = function ($band) {
    return $band;
};
// 일회성, 소모성 람다 함수
// 재활용이 불가함!
// 디버깅 용으로 급하게 사용하기 딱 좋음!

echo $lambda('Oasis');


