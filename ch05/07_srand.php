<?php
for($i=0 ; $i<5 ; $i++) // 랜덤한 난수를 5번 발생!
{
    srand();
    // 랜덤한 함수의 시드를 초기화
    // rand 함수와 같이 쓰이지는 않는다!
    echo "Generate randomly!: ".rand()."<br>";
}