<?php
session_start(); // Initialize session data
session_unset(); // Free all session variables
session_destroy(); // Destroys all data registered to a session

# 세션이 만료되었다면 메인페이지로 이동할 것
if (!isset($_SESSION['ss_bh_id'])) {
    echo "<script>alert('로그아웃 되었습니다.')</script>";
    echo "<script>location.replace('./01_index.php')</script>";
}