<?php
session_start();
session_unset();
session_destroy();

# 세션이 만료되었다면 './01_index.php' 페이지로 리다이렉팅 시킬 것
if (!isset($_SESSION['ss_mb_id'])) {
    echo "<script>alert('로그아웃 되었습니다.')</script>";
    echo "<script>location.replace('./01_index.php')</script>";
    exit();
}