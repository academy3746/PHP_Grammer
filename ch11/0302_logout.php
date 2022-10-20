<?php
# Initialize session data
session_start();

# Free all session variables
session_unset();

# Destroys all data registered to a session
session_destroy();

# If the session has been deleted, go to page "01_index.php".
if (!isset($_SESSION['ss_bh_id'])) {
    echo "<script>alert('로그아웃 되었습니다.');</script>";
    echo "<script>location.replace('./01_index.php')</script>";
    exit();
}