<?php
$domain = "diomarket.net";

$ip = gethostbyname(hostname: $domain);
// 해당 도메인의 ip (v4) 주소를 조회하여 $ip 변수에 대입
echo $ip."<br>";

$ip_number = ip2long(ip: $ip);
// 해당 ip 를 32비트 Long 타입 정수로 변환하여 $ip_number 변수에 대입
echo $ip_number."<br>";

$ip_addr = long2ip($ip_number);
// $ip_number 변수에 할당된 ip 주소를 컴퓨터가 읽을 수 있는 형태로 변환하여 $ip_addr 변수에 대입
echo $ip_addr;