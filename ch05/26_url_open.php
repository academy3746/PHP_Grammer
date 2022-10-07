<?php
$curl = curl_init();
/*
 * cURL 을 시작하는 인스턴스 생성
 * 생성한 인스턴스를 꺼내다가 쓸 수 있도록 변수 $curl 에 대입
 */

curl_setopt(handle: $curl, option: CURLOPT_URL, value: "https://github.com/academy3746");
/*
 * $handle: $curl = curl_init();
 * $value: linked domain address
 */

$content = curl_exec($curl); // Execute tuned cURL.
curl_close($curl);
// Quit cURL instance.
echo $content;