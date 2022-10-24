<?php
session_start();
session_unset();
session_destroy();

# 세션이 만료되었다면 '01_index.php' 페이지로 이동
if (!isset($_SESSION['ss_mb_id'])) {
    echo "<script>alert('로그아웃되었습니다!')</script>";
    echo "<script>location.replace('./01_index.php')</script>";
}