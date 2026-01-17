<?php
include 'header.php';
?>
<?php
session_start();

// Kiểm tra quyền truy cập: Nếu chưa có session 'user', đuổi về trang login
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bảng điều khiển</title>
</head>
<body>
    <h1>Chào mừng bạn trở lại!</h1>
    <p>Email của bạn: <strong><?= htmlspecialchars($_SESSION['user']) ?></strong></p>
    
    <hr>
    <ul>
        <li><a href="list_students.php">Quản lý sinh viên</a></li>
        <li><a href="logout.php" onclick="return confirm('Bạn có chắc muốn thoát?')">Đăng xuất</a></li>
    </ul>
</body>
</html>