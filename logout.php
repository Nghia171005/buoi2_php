<?php
include 'header.php';
?>
<?php
session_start();

// 1. Xóa toàn bộ biến session
session_unset();

// 2. Hủy session
session_destroy();

// 3. Chuyển hướng về trang login
header("Location: login.php");
exit();
?>